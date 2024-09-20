<?php

namespace App\Http\Controllers;

use App\Models\OrderDetails;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $order_details = OrderDetails::all();
        return view('order_details.index', [
        'odetails' => $order_details
        ]);
        } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order_details.create', [
            'product' => Product::all(),
            'orders' => Orders::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insertdataodetails(Request $request)
    {
        OrderDetails::create($request->all());
        // return $request->input();
        return redirect('/order_details')->with('success', 'New Order Details Created Successfully');
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
        $order_details = OrderDetails::find($id);
        if (!$order_details) return redirect()->route('order_details.edit');
        return view('order_details.edit', [
            'order_details' => $order_details
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    //Mengedit Data Order Details
    $order_details = OrderDetails::find($id);
    $order_details->name = $request->name;
    $order_details->email = $request->email;
    if ($request->password) $order_details->password = bcrypt($request->password);
    $order_details->roles = $request->roles;
    $order_details->save();
    return redirect('/order_details')->with('success', 'Order Details Data Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusodetails($id) 
    { 
        $order_details = OrderDetails::find($id);
        $order_details->delete();
        return redirect('/order_details')->with('success', 'The Order Details Data Successfully Delete!');
    }
}
