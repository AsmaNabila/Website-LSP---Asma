<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\DiscountCategory;
use App\Models\Product;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $discount = Discount::all();
        return view('discount.index', [
        'discount' => $discount
        ]);
        } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('discount.create', [
            'dcategory' => DiscountCategory::all(),
            'product' => Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insertdatadiscount(Request $request)
    {
        $discount = Discount::create($request->all());
        // return $request->input();
        return redirect('/discount')->with('success', 'New Discount data with the id "' . $discount->id . '" has been successfully saved!');
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
        $discount = Discount::find($id);
        if (!$discount) return redirect()->route('discount.edit');
        return view('discount.edit', [
            'discount' => $discount,
            'dcategory' => DiscountCategory::all(),
            'product' => Product::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    //Mengedit Data Discount
    $discount = Discount::find($id);
    $discount->category_discount_id = $request->category_discount_id;
    $discount->product_id = $request->product_id;
    $discount->start_date = $request->start_date;
    $discount->end_date = $request->end_date;
    $discount->percentage = $request->percentage;
    $discount->save();
    return redirect('/discount')->with('success', 'Discount Data Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusdiscount($id) 
    { 
        $discount = Discount::find($id);
        $discount->delete();
        return redirect('/discount')->with('success', 'The Dicount Data Successfully Delete!');
    }
}
