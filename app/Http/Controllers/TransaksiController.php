<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'You need to log in first!');
        }

        // Get the authenticated user's ID
        $userId = Auth::id();

        // Retrieve the total amount of endtotal for the user's cart items
        $totalBelanja = Cart::where('user_id', $userId)->sum('endtotal');

        // Debugging: Log the total amount to check if it's being retrieved correctly
        Log::info('Total Belanja: ' . $totalBelanja);

        // Pass the total amount to the view
        return view('bayar.index', ['totalBelanja' => $totalBelanja]);
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
