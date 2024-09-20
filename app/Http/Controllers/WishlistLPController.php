<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use App\Models\Product;

class WishlistLPController extends Controller
{
    public function index(Request $request)
{
    // Ambil data produk dari wishlist pengguna yang saat ini login
    $wishlistProducts = Wishlist::where('customer_id', Auth::id())
        ->with('product') // Pastikan untuk mengambil data produk yang terkait dengan setiap wishlist
        ->get();

    $products = Product::with('discounts')->get();

    // Inisialisasi variabel untuk menyimpan total harga diskon
    $totalDiscountedPrice = 0;

    // Iterasi setiap produk dalam wishlist untuk menghitung total harga diskon
    foreach ($wishlistProducts as $wishlistProduct) {
        // Periksa apakah produk memiliki diskon
        if ($wishlistProduct->product->discount_percentage > 0) {
            // Hitung harga diskon
            $discountedPrice = $wishlistProduct->product->price - ($wishlistProduct->product->price * $wishlistProduct->product->discount_percentage / 100);
            // Tambahkan harga diskon ke total harga diskon
            $totalDiscountedPrice += $discountedPrice;
        } else {
            // Jika produk tidak memiliki diskon, tambahkan harga normal ke total harga diskon
            $totalDiscountedPrice += $wishlistProduct->product->price;
        }
    }

    // Hitung jumlah produk dalam wishlist
    $wishlistCount = $wishlistProducts->count();

    // Kirimkan semua variabel yang diperlukan ke view
    return view('wishlistlp.index', compact('products', 'wishlistProducts', 'wishlistCount', 'totalDiscountedPrice'));
}


public function addToWishlist(Request $request)
{
    // Validasi request
    $request->validate([
        'product_id' => 'required|exists:products,id',
    ]);

    // Cek apakah pengguna sudah login
    if (Auth::check()) {
        // Cek apakah produk sudah ada di wishlist pengguna
        $existingWishlist = Wishlist::where('customer_id', Auth::id())
            ->where('product_id', $request->input('product_id'))
            ->first();

        // Jika produk belum ada di wishlist, tambahkan ke dalam wishlist
        if (!$existingWishlist) {
            $wishlist = new Wishlist();
            $wishlist->customer_id = Auth::id();
            $wishlist->product_id = $request->input('product_id');
            $wishlist->save();
        }

        // Redirect ke halaman wishlist dengan menyertakan pesan sukses dan product_id dalam sesi flash
        return redirect()->route('wishlistlp.index')->with([
            'success' => 'Product berhasil ditambahkan ke daftar Wishlist.',
            'product_id' => $request->input('product_id')
        ]);
    } else {
        return redirect()->route('login')->with('error', 'Silakan login untuk menambahkan produk ke wishlist.');
    }
}


public function hapuswishlistlp($id)
{
    // Temukan dan hapus item wishlist berdasarkan ID
    $wishlistItem = Wishlist::findOrFail($id);

    // Pastikan item wishlist milik pengguna yang saat ini login
    if ($wishlistItem->customer_id === Auth::id()) {
        $wishlistItem->delete();
        return redirect()->route('wishlistlp.index')->with('success', 'Product Berhasil Dihapus dari Wishlist');
    } else {
        return redirect()->route('wishlistlp.index')->with('error', 'You are not authorized to delete this item.');
    }
}

}