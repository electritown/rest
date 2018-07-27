<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart as Cart;
use RuntimeException;
use App\Menu;
use PDF;


class HomeController extends Controller
{
    public function index(){
            
    }

    public function generatePDF()

    {
        $cartItems=Cart::content();


       $pdf = PDF::loadView('cart.index', compact('cartItems'));

      

        return $pdf->stream('pdf.pdf');
        
       // return PDF::load($pdf, 'A4', 'portrait')->stream('my_pdf');
    }
}