<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscountCategory;
use GuzzleHttp\Handler\Proxy;

class DiscountCategoriesController extends Controller
{
    public function index(){
        $discount_categories = DiscountCategory::all();
        return view('discount_categories.index', [
        'dcategory' => $discount_categories
        ]);
        } 
    public function create()
    {
        return view('discount_categories.create');
    }
    
    public function insertdatadcategory(Request $request)
    {
        $dcategory = DiscountCategory::create($request->all());
        // return $request->input();
        return redirect('/discount_categories')->with('success', 'New Discount Category data with the name "' .$request -> category_name. '" with id "' .$dcategory->id. '" has been successfully saved!');
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
        $discount_categories = DiscountCategory::find($id);
        if (!$discount_categories) return redirect()->route('discount_categories.edit');
        return view('discount_categories.edit', [
            'discount_categories' => $discount_categories
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    //Mengedit Product Categories
    $discount_categories = DiscountCategory::find($id);
    $discount_categories->category_name = $request->category_name;
    $discount_categories->save();
    return redirect('/discount_categories')->with('success', 'Discount Categories Data Update Successfully');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function hapusdcategory($id) 
    { 
        $discount_categories = DiscountCategory::find($id);
        $discount_categories->delete();
        return redirect('/discount_categories')->with('success', 'Discount Categories Data Successfully Delete!');
    }
}


