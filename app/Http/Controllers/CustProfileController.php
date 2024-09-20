<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustProfileController extends Controller
{
    /**
     * Display the authenticated customer's profile.
     */
    public function index()
    {
        // Check if Auth::user() returns an instance of Customers model
        $customer = Auth::user();

        if (!$customer instanceof Customers) {
            // If not, explicitly fetch the customer using the ID
            $customer = Customers::find(Auth::id());
        }

        return view('custprofile.index', compact('customer'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
