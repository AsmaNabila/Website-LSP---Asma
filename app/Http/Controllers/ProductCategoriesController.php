<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use GuzzleHttp\Handler\Proxy;

class ProductCategoriesController extends Controller
{
    public function index(){
        $product_categories = ProductCategory::all();
        return view('product_categories.index', [
        'pcategory' => $product_categories
        ]);
        } 

    public function create()
    {
        return view('product_categories.create', [
            'idpcategory' => ProductCategory::all()
        ]);
    }
    
    public function insertdatapcategory(Request $request)
    {
        $pcategory = ProductCategory::create($request->all());
        // return $request->input();
        return redirect('/product_categories')->with('success', 'New Product Category data with the name "' .$request -> category_name. '" with id "' .$pcategory->id. '" has been successfully saved!');
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
        $product_categories = ProductCategory::find($id);
        if (!$product_categories) return redirect()->route('product_categories.edit');
        return view('product_categories.edit', [
            'product_categories' => $product_categories
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    //Mengedit Product Categories
    $product_categories = ProductCategory::find($id);
    $product_categories->category_name = $request->category_name;
    $product_categories->save();
    return redirect('/product_categories')->with('success', 'Product Categories Data Update Successfully');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function hapuspcategory($id) 
    { 
        $product_categories = ProductCategory::find($id);
        $product_categories->delete();
        return redirect('/product_categories')->with('success', 'Product Categories Data Successfully Delete!');
    }
}


