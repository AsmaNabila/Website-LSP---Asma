<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Customers;

class WhislistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('whislist.index', [
            'wishlist' => Wishlist::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('whislist.create', [
            'customer' => Customers::all(),
            'product'=> Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insertdatawishlist(Request $request)
    {
        $whislist = Wishlist::create($request->all());
        // return $request->input();
        return redirect('/whislist')->with('success', 'New Wishlist data with the id "' . $whislist->id . '" has been successfully saved!');
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
    public function edit($id)
    {
        //Menampilkan Form Edit
        $wishlist = Wishlist::find($id);
        if (!$wishlist) return redirect()->route('whislist.edit');
        return view('whislist.edit', [
            'wishlist' => $wishlist, 
            'customer' => Customers::all(),
            'product'=> Product::all()
        ]); 
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    //Mengedit Data Deliveries
    $wishlist = Wishlist::find($id);
    $wishlist->customer_id = $request->customer_id;
    $wishlist->product_id = $request->product_id;
    $wishlist->save();
    return redirect('/whislist')->with('success', 'whislist Data Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapuswishlist($id) 
    { 
        $wishlist = Wishlist::find($id);
        $wishlist->delete();
        return redirect('/whislist')->with('success', 'The Wishlist Data Successfully Delete!');
    }

}
