<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductReviews;
use App\Models\Customers;
use App\Models\Product;

class ProductReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $product_reviews = ProductReviews::all();
            return view('product_reviews.index', [
            'previews' => $product_reviews
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product_reviews.create', [
            'idcustomers' => Customers::all(),
            'product'=> Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insertdatapreviews(Request $request)
    {
        
        $product_reviews = ProductReviews::create($request->all());
        // return $request->input();
        return redirect('/product_reviews')->with('success', 'New Orders data with the id "' . $product_reviews->id . '" has been successfully saved!');
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
        $product_reviews = ProductReviews::find($id);
        if (!$product_reviews) return redirect()->route('product_reviews.edit');
        return view('product_reviews.edit', [
            'product_reviews' => $product_reviews, 
            'idcustomers' => Customers::all(),
            'product'=> Product::all()
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    //Mengedit Product Categories

    $product_reviews = ProductReviews::find($id);
    $product_reviews->customer_id = $request->customer_id;
    $product_reviews->product_id = $request->product_id;
    $product_reviews->rating = $request->rating;
    $product_reviews->comment = $request->comment;
    $product_reviews->save();
    return redirect('/product_reviews')->with('success', 'Product Reviews Data Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapuspreviews($id)
    { 
        $product_reviews = ProductReviews::find($id);
        $product_reviews->delete();
        return redirect('/product_reviews')->with('success', 'Product Reviews Data Successfully Delete!');
    }
}
