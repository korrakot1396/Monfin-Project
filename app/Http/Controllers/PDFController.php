<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Payment;
use PDF;


class PDFController extends Controller
{
    public function pdf()
    {
        $details = Detail::all();
        $payment = Payment::all();
        $pdf = PDF::loadView('pdf',['details' => $details]);
        return @$pdf->stream();
    }
   
}
