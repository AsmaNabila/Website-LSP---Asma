<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductReviews;
use App\Models\Wishlist;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landingpage', [
            'idcustomers' => Customers::all(),
            'idproduct'=> Product::all(),
            'wishlist' => Wishlist::all(),
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insertdataform(Request $request)
    {
        ProductReviews::create($request->all(), [
            'idcustomers' => Customers::all(),
            'idproduct'=> Product::all(),
            'wishlist' => Wishlist::all()
        ]);
        // return $request->input();
        return redirect('/')->with('success', 'Berhasil!! Terimakasih Atas Review Anda');
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
}
