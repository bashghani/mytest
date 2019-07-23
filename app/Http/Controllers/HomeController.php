<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to HDTuto.com','need'=>"yesbesty"];
        $pdf = PDF::loadView('myPDF', $data);
//return $pdf->stream('whateveryourviewname.pdf');
         $pdf->save('withneeds.pdf');
         echo"yes saved ok";die();
    }
}
