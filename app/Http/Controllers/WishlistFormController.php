<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Customers;
use App\Models\Product;


class WishlistFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('wishlistform.index', [
            'customer' => Customers::all(),
            'product'=> Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insertdatawl(Request $request)
    {
        $wishlist = Wishlist::create($request->all());
        // return $request->input();
        return redirect('/')->with('success', 'Berhasil!! Product Yang Di Request telah berhasil Ditambahkan!!');
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
