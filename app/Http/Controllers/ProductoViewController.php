<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoViewController extends Controller
{
    //
    public function index() {

    	return view('producto.index');
    }
}
