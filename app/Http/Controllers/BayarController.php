<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class BayarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bayar.index');

        // Mendapatkan total belanja dari model Cart atau dari data lain yang sesuai
        $totalBelanja = Cart::calculateTotal(); // Metode ini hanya contoh, sesuaikan dengan logika bisnis Anda
    
        // Mengirimkan total belanja ke tampilan bayar.blade.php
        return view('bayar', ['totalBelanja' => $totalBelanja]);
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
    public function bayaraction(Request $request)
    {
        return redirect('/bayar')->with('confirm', 'Apakah anda yakin akan melakukan pembayaran?');
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

    public function bayar()
    {
        
    }

}
