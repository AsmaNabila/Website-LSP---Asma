<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\Product;
use \App\Models\Cart;
use App\Models\Orders;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data dari tabel cart berdasarkan user_id
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();
    
        // Hitung total harga belanjaan berdasarkan produk yang dipilih
        $totalPrice = $cartItems->sum(function ($cartItem) {
            // Hanya hitung total harga jika produk dipilih (checkbox checked)
            if ($cartItem->selected) {
                return $cartItem->product->getDiscountedPrice() * $cartItem->quantity;
            }
            return 0; // Jika produk tidak dipilih, kembalikan 0
        });
    
        // Tampilkan halaman cart dengan data produk yang sesuai dan total harga belanjaan
        return view('cart.index', compact('cartItems', 'totalPrice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::find($productId);
        $userId = auth()->id();
    
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        $quantityToAdd = $request->input('stock_quantity', 1);
        $price = $product->price;
    
        // Calculate price with discount if available
        if ($product->discounts()->exists()) {
            $discount = $product->discounts()->first();
            $discountPercentage = $discount->percentage;
    
            if ($discountPercentage > 0) {
                $price = $product->price - ($product->price * $discountPercentage / 100);
            }
        }
    
        $cartItem = Cart::where('user_id', $userId)
                        ->where('product_id', $product->id)
                        ->first();
    
        if ($cartItem) {
            // Update existing cart item
            $cartItem->quantity += $quantityToAdd;
            $cartItem->total = $cartItem->quantity * $price;
            $cartItem->save();
        } else {
            // Create new cart item
            Cart::create([
                'user_id' => $userId,
                'product_id' => $product->id,
                'quantity' => $quantityToAdd,
                'total' => $quantityToAdd * $price,
            ]);
        }
    
        // Calculate endtotal for the current user
        $endtotal = Cart::where('user_id', $userId)->sum('total');
    
        // Update endtotal for all cart items of the user
        Cart::where('user_id', $userId)->update(['endtotal' => $endtotal]);
    
        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully!');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapuscart($id)
    {
        // Temukan dan hapus item wishlist berdasarkan ID
        $cartItem = Cart::findOrFail($id);

        // Pastikan item wishlist milik pengguna yang saat ini login
        if ($cartItem->user_id === Auth::id()) {
            $cartItem->delete();
            return redirect()->route('cart.index')->with('success', 'Product Berhasil Dihapus dari Cart');
        } else {
            return redirect()->route('cart.index')->with('error', 'You are not authorized to delete this item.');
        }
    }

    public function showCart()
    {
        $total_price = 0; 
        $user_id = auth()->user()->id;
        $products = Product::all();
        $carts = Cart::where('user_id', $user_id)->get();
        $cartItems = [];
        if (isset($_COOKIE['cartItems'])) {
            $cartItems = json_decode($_COOKIE['cartItems'], true);
        }
        $productsInCart = Product::whereIn('id', $cartItems)->get();
        return view('cart.index', compact('productsInCart'));

        foreach ($carts as $cart) {
            $total_price = $total_price + $products->price;
        }
    }

    public function checkout(Request $request)
    {
        // Ambil ID produk yang dipilih dari permintaan
        $selectedProductIds = $request->selected_products;
    
        // Ambil data produk dari tabel cart berdasarkan user_id dan produk yang dipilih
        $userId = auth()->id();
        $cartItems = Cart::where('user_id', $userId)
                        ->whereIn('product_id', $selectedProductIds)
                        ->with('product')
                        ->get();
    
        // Hitung total harga produk yang dipilih
        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->getDiscountedPrice() * $cartItem->quantity;
        });
    
        // Simpan data pesanan ke dalam tabel orders
        $order = Orders::create([
            'customer_id' => $userId,
            'order_date' => now(), // Tanggal pesanan dibuat
            'total_amount' => $totalPrice,
            'status' => 'pending', // Status pesanan
        ]);
    
        // Hapus semua item dalam keranjang belanja yang terkait dengan pengguna yang saat ini login
        Cart::where('user_id', $userId)->whereIn('product_id', $selectedProductIds)->delete();
    
        // Redirect pengguna ke halaman checkoutvw dengan membawa variabel $totalPrice
        return redirect()->route('checkoutvw.index', compact('totalPrice'))->with('success', 'Pesanan Anda telah berhasil Ditambahkan ke Checkout!');
    }
}

