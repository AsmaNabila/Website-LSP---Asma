<?php

namespace App\Http\Controllers;

use App\Models\Deliveries;
use App\Models\Orders;
use Illuminate\Http\Request;

class DeliveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('deliveries.index', [
            'deliveries' => Deliveries::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deliveries.create', [
            'idorders' => Orders::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insertdatadeliveries(Request $request)
    {
        
        $deliveries = Deliveries::create($request->all());
        // return $request->input();
        return redirect('/deliveries')->with('success', 'New Deliveries data with the id "' . $deliveries->id . '" has been successfully saved!');
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
        $deliveries = Deliveries::find($id);
        if (!$deliveries) return redirect()->route('deliveries.edit');
        return view('deliveries.edit', [
            'deliveries' => $deliveries,
            'idorders' => Orders::all()
        ]); 
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    //Mengedit Data Deliveries
    $deliveries = Deliveries::find($id);
    $deliveries->order_id = $request->order_id;
    $deliveries->shipping_date = $request->shipping_date;
    $deliveries->tracking_code = $request->tracking_code;
    $deliveries->status = $request->status;
    $deliveries->save();
    return redirect('/deliveries')->with('success', 'Deliveries Data Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusdeliveries($id) 
    { 
        $deliveries = Deliveries::find($id);
        $deliveries->delete();
        return redirect('/deliveries')->with('success', 'The Deliveries Data Successfully Delete!');
    }
}
