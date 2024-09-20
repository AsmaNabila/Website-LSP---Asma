<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Payments;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class OdetailsIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customerId = Auth::id();
        $customerPayments = Payments::whereHas('order', function ($query) use ($customerId) {
            $query->where('customer_id', $customerId);
        })->with('customer')->get();

        return view('odetails.index', compact('customerPayments'));
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

    public function downloadReceipt($id)
    {
            // Ambil data pembayaran
            $payment = Payments::find($id);
            $customers = Customers::find($id);
            if (!$payment) {
                return redirect()->back()->with('error', 'Payment not found');
            }
    
            // Load view dan kirim data pembayaran ke dalamnya
            $pdf = FacadePdf::loadView('receipt', compact('payment'));
    
            // Generate PDF dan kirim untuk diunduh
            return $pdf->download('Bukti_Pembayaran_' . $payment->id . '.pdf');
}

}