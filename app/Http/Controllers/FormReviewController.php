<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Product;
use App\Models\ProductReviews;
use Illuminate\Support\Facades\Auth;

class FormReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = ProductReviews::all(); // Ambil semua data review
        return view('formreview.index', [
            'idcustomer' => Customers::all(),
            'idproduct' => Product::all(),
            'reviews' => $reviews, // Kirim data review ke tampilan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insertdataformreview(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:10',
            'comment' => 'required|string|max:255',
        ]);

        // Simpan review
        ProductReviews::create([
            'customer_id' => Auth::id(),
            'product_id' => $validated['product_id'],
            'rating' => $validated['rating'],
            'comment' => $validated['comment'],
        ]);

        // Redirect dengan pesan sukses
        return redirect('/formreview')->with('success', 'Berhasil!! Terimakasih Atas Review Anda');
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
}