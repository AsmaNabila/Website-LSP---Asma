<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Customers;

class OrdersFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('beli.index',  [
            'idcustomers' => Customers::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insertdatafrmorders(Request $request)
    {
        $oform = Orders::create($request->all());
        // return $request->input();
        return redirect('/checkout')->with('success', 'Berhasil!! Data Order Customers dengan id "' . $oform ->id . '" dan pada tanggal "' .$request->order_date. '" Telah Ditambahkan!');
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
