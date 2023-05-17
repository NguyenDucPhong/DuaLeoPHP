<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::latest()->paginate(8);

        return view('admin.invoices.index', compact('invoices'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Lưu thông tin hoá đơn vào cơ sở dữ liệu
        $invoice = new Invoice();
        $invoice->id_invoice = $request->input('id_invoice');
        $invoice->id_customer = $request->input('id_customer');
        $invoice->total = $request->input('total');
        $invoice->save();

        // Lưu chi tiết hoá đơn vào cơ sở dữ liệu
        $details = $request->input('details');
        foreach ($details as $detail) {
            $invoiceDetail = new InvoiceDetail();
            $invoiceDetail->id_invoice = $invoice->id;
            $invoiceDetail->id_product = $detail['id_product'];
            $invoiceDetail->quantity = $detail['quantity'];
            $invoiceDetail->price = $detail['price'];
            $invoiceDetail->save();
        }

        return redirect()->route('invoices.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
