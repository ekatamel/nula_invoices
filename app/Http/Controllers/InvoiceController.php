<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use PDF;  

class InvoiceController extends Controller
{
    public function index()
    {
      $invoices = Invoice::query()
                          ->with("customer", "supplier")
                          ->get();

      return view("index", compact("invoices"));
    }

    public function show($id)
    {
      $invoice = Invoice::findOrFail($id);

      return view("invoice", compact("invoice"));
    }

    public function loadPdf($id)  
        {  
          $invoice = Invoice::findOrFail($id);
          view()->share("invoice", $invoice);

          $pdf = PDF::loadView('pdfView');  
          return $pdf->download('invoice.pdf');  
  
          return view('invoice');  
        } 
}
