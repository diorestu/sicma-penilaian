<?php

namespace App\Http\Controllers\Admin;

use App\Models\Audit;
use Illuminate\Http\Request;
use PDF;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function print_report_bulanan()
    {
        $data = Audit::whereMonth('tanggal_audit', date('m'))->get();

        $pdf = PDF::loadView('print.report_bulanan', compact('data'))->setPaper('A4', 'landscape');

        return $pdf->stream('tutsmake.pdf');
    }
}
