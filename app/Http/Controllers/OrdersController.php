<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use App\Models\Orders;
use Barryvdh\DomPDF\PDF;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('orders.index',  [
            'orders' => Orders::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create', [
            'idcustomers' => Customers::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insertdataorders(Request $request)
    {
        $order = Orders::create($request->all());
        // Menggunakan $order->id untuk mendapatkan ID dari pesanan yang baru saja dibuat
        return redirect('/orders')->with('success', 'New Orders data with the id "' . $order->id . '" has been successfully saved!');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Request $request, $period)
    {
        $salesData = [];

        switch ($period) {
            case 'daily':
                $salesData['period'] = 'Today';
                $salesData['details'] = Orders::whereDate('order_date', today())->get();
                break;
            case 'weekly':
                $salesData['period'] = 'This Week';
                $salesData['details'] = Orders::whereBetween('order_date', [now()->startOfWeek(), now()->endOfWeek()])->get();
                break;
            case 'monthly':
                $salesData['period'] = 'This Month';
                $salesData['details'] = Orders::whereYear('order_date', now()->year)
                    ->whereMonth('order_date', now()->month)
                    ->get();
                break;
            case 'annual':
                $salesData['period'] = 'This Year';
                $salesData['details'] = Orders::whereYear('order_date', now()->year)
                    ->get();
                break;
            default:
                return redirect()->back()->with('error', 'Invalid period selected.');
        }

        return view('orders.detail', compact('salesData'));
    }

        public function downloadReport($period)
        {
            // Fetch sales data based on the period
            $salesData = $this->getSalesData($period);
        
            // Inisialisasi objek PDF
            $pdf = app('dompdf.wrapper');
        
            // Load view and pass sales data
            $pdf->loadView('orders.detail_pdf', compact('salesData'));
        
            // Download the PDF file
            return $pdf->download($period.'_sales_report.pdf');
        }

    private function getSalesData($period)
    {
        // Logic to fetch sales data based on the period
        $salesData = [
            'period' => ucfirst($period),
            'details' => Orders::whereBetween('order_date', $this->getDateRange($period))->get()
        ];

        return $salesData;
    }

    private function getDateRange($period)
    {
        // Logic to calculate date range based on the period (daily, weekly, monthly, annual)
        switch ($period) {
            case 'daily':
                return [now()->startOfDay(), now()->endOfDay()];
            case 'weekly':
                return [now()->startOfWeek(), now()->endOfWeek()];
            case 'monthly':
                return [now()->startOfMonth(), now()->endOfMonth()];
            case 'annual':
                return [now()->startOfYear(), now()->endOfYear()];
            default:
                return [now()->startOfDay(), now()->endOfDay()];
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Menampilkan Form Edit
        $orders = Orders::find($id);
        if (!$orders) return redirect()->route('orders.edit');
        return view('orders.edit', [
            'orders' => $orders,
            'idcustomers' => Customers::all()
        ]); 
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    //Mengedit Data Orders
    $orders = Orders::find($id);
    $orders->customer_id = $request->customer_id;
    $orders->order_date = $request->order_date;
    $orders->total_amount = $request->total_amount;
    $orders->status = $request->status;
    $orders->save();
    return redirect('/orders')->with('success', 'New Orders Data Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusorders($id) 
    { 
        $orders = Orders::find($id);
        $orders->delete();
        return redirect('/orders')->with('success', 'The Order Data Successfully Delete!');
    }

    public function salesChart()
{
    // Mendapatkan data penjualan 3 bulan terakhir
    $salesData = Orders::selectRaw('MONTH(order_date) as month, SUM(total_amount) as total_sales')
        ->where('order_date', '>=', now()->subMonths(3))
        ->groupByRaw('MONTH(order_date)')
        ->get()
        ->pluck('total_sales', 'month')
        ->toArray();

    return view('orders.sales_chart', compact('salesData'));
}
}

