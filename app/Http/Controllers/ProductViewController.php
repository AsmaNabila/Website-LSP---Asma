<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Product::with('discounts')->paginate(10);

        if (Auth::guest()) {
            return redirect() -> route('/customer/login');
        }

        $products = Product::with('discounts')->get();

        return view('productview.index', [
            'products' => $products,
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

    public function product_search(Request $request)
    {
        $search_text = $request->search;
        $keywords = explode(' ', $search_text); // Memisahkan setiap kata dalam pencarian
        $productQuery = Product::query();
    
        foreach ($keywords as $keyword) {
            $productQuery->where('product_name', 'LIKE', '%' . $keyword . '%');
        }
    
        $products = $productQuery->get();
    
        return view('productview.index', compact('products'));
    }
}
