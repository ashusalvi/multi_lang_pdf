<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class TestController extends Controller
{
    public function generate_pdf()
	{
		$data = [
			'foo' => 'bar'
		];
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
            'default_font' => 'nikosh',
        ]);
        $mpdf->WriteHTML($this->pdfHTML());
        $mpdf->Output();
		// $pdf = PDF::loadView('pdf', $data);
		// $pdf = PDF::loadView('pdf', $data);
		// return $pdf->stream('document.pdf');
	}

    public function pdfHTML(){
        $output = "লিখে দেখুন...";
        return $output;
    }
}
