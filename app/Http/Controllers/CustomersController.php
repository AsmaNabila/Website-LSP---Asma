<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customers.index', [
            'customers' => Customers::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insertdatacustomers(Request $request)
    {
        
        Customers::create($request->all());
        // return $request->input();
        return redirect('/customers')->with('success', 'New  Customers data with the name "' .$request -> name. '" has been successfully saved!');
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
        //Menampilkan Form Edit
        $customers = Customers::find($id);
        if (!$customers) return redirect()->route('customers.edit');
        return view('customers.edit', [
            'customers' => $customers
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    //Mengedit Data Customer
    $customers = Customers::find($id);
    $customers->name = $request->name;
    $customers->email = $request->email;
    if ($request->password) $customers->password = bcrypt($request->password);
    $customers->phone = $request->phone;
    $customers->address1 = $request->address1;
    $customers->address2 = $request->address2;
    $customers->address3 = $request->address3;
    $customers->save();
    return redirect('/customers')->with('success', 'New Customers Data Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapuscustomers($id) 
    { 
        $customers = Customers::find($id);
        $customers->delete();
        return redirect('/customers')->with('success', 'The Customer Data Successfully Delete!');
    }
}
