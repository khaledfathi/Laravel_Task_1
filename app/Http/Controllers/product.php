<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    public function addProduct()
    {
        return view('addProduct'); 
    }
}
