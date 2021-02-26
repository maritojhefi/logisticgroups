<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CotizacionController extends Controller
{
    public function calcular(Request $request)
    {
       return view("pages.resultadocotizacion");
    }
}
