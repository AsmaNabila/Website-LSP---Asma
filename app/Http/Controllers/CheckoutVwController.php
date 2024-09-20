<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Payments;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;

class CheckoutVwController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Mendapatkan informasi pelanggan yang saat ini sedang login
    $customers = Auth::user();

    // Hanya menggunakan ID pengguna saat ini
    $userId = Auth::id();

    // Mendapatkan semua item keranjang untuk pengguna saat ini
    $cartItems = Cart::where('user_id', $userId)->with('product')->get();

    // Mendapatkan produk yang dipilih dari session
    $selectedProductIds = session('selected_products', []);
    $selectedProducts = Product::whereIn('id', $selectedProductIds)->get();

    // Menghitung total harga produk yang dipilih
    $totalPrice = $selectedProducts->sum(function ($product) use ($cartItems) {
        $cartItem = $cartItems->firstWhere('product_id', $product->id);
        return $cartItem ? $product->getDiscountedPrice() * $cartItem->quantity : 0;
    });

    // Mendapatkan pesanan jika perlu
    $idorders = Orders::all(); // Anda mungkin ingin menambahkan kriteria tertentu di sini

    // Menampilkan halaman checkout dengan informasi yang diperlukan
    return view('checkoutvw.index', compact('selectedProducts', 'totalPrice', 'customers', 'idorders', 'cartItems'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Get selected product IDs from the request
        $selectedProducts = $request->input('selected_products', []);

        // Ensure $selectedProducts is an array
        $selectedProducts = is_array($selectedProducts) ? $selectedProducts : [];

        // Store selected product IDs in the session
        session(['selected_products' => $selectedProducts]);

        // Redirect to the checkout page
        return Redirect::route('checkoutvw.index')->with('success', 'Products successfully added to checkout!');
    }

    /**
     * Display the specified resource.
     */
    public function storecheckout(Request $request)
{
    // Mendapatkan order terbaru dari pelanggan yang sedang login
    $latestOrder = Orders::where('customer_id', auth()->id())->latest()->first();

    // Pastikan order tersedia
    if ($latestOrder) {
        // Membuat pembayaran
        Payments::create([
            'order_id' => $latestOrder->id, // Atur order ID
            'payment_date' => $request->payment_date,
            'payment_method' => $request->payment_method,
            'transfer_details' => $request->transfer_details,
            'amount' => $request->amount
        ]);

        // Update status order menjadi "Selesai"
        $latestOrder->update([
            'status' => 'Selesai'
        ]);

        // Menghapus produk yang dipilih dari session
        $request->session()->forget('selected_products');

        // Redirect ke halaman detail order dengan pesan sukses
        return redirect('/odetailsview')->with('success', 'Berhasil, barang berhasil di checkout');
    } else {
        // Jika tidak ada pesanan yang tersedia, berikan pesan error
        return redirect()->back()->with('error', 'Tidak dapat menemukan pesanan yang sesuai');
    }
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function checkout(Request $request)
    {
        $userId = auth()->id();
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();

        // Hitung total harga produk yang dipilih
        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->getDiscountedPrice() * $cartItem->quantity;
        });

        // Tampilkan halaman checkout dengan data produk yang dipilih dan total harga
        return view('checkoutvw.index', compact('cartItems', 'totalPrice'));
    }

    public function process(Request $request)
{
    $userId = auth()->id();
    $selectedProductIds = session('selected_products', []);

    // Fetch cart items for the selected products
    $cartItems = Cart::where('user_id', $userId)
                    ->whereIn('product_id', $selectedProductIds)
                    ->with('product')
                    ->get();

    // Calculate total price based on the selected products
    $totalPrice = $cartItems->sum(function ($cartItem) {
        return $cartItem->product->getDiscountedPrice() * $cartItem->quantity;
    });

    // Log totalPrice for debugging
    Log::info('Total Price: ' . $totalPrice);

    // Save order data to the orders table
    $order = Orders::create([
        'customer_id' => $userId,
        'order_date' => now(),
        'total_amount' => $totalPrice,
        'status' => 'Proses',
    ]);

    // Redirect to the checkout page with success message
    return redirect()->route('checkoutvw.index')->with('success', 'Pesanan Anda telah berhasil dibuat! Silahkan lakukan Konfirmasi Pembayaran');
}
}
