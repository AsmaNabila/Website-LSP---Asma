<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments;
use App\Models\Orders;

class PaymentsController extends Controller
{
    public function index()
    {
        return view('payments.index', [
            'payments' => Payments::all()
        ]);
    }
    public function create()
    {
        return view('payments.create', [
            'idorders' => Orders::all()
        ]);
    }
    
    public function insertdatapayments(Request $request)
    {
        
        $payments = Payments::create($request->all());
        // return $request->input();
        return redirect('/payments')->with('success', 'New Payments data with the id "' . $payments->id . '" has been successfully saved!');
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
        $payments = Payments::find($id);
        if (!$payments) return redirect()->route('payments.edit');
        return view('payments.edit', [
            'payments' => $payments,
            'idorders' => Orders::all()
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    //Mengedit Data Payments
    $payments = Payments::find($id);
    $payments->order_id = $request->order_id;
    $payments->payment_date = $request->payment_date;
    $payments->payment_method = $request->payment_method;
    $payments->amount = $request->amount;
    $payments->save();
    return redirect('/payments')->with('success', 'Payments Data Update Successfully');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function hapuspayments($id) 
    { 
        $payments = Payments::find($id);
        $payments->delete();
        return redirect('/payments')->with('success', 'The Payment Data Successfully Delete!');
    }

}
