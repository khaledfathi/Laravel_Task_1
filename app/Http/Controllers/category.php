<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class category extends Controller
{
    public function addCategory()
    {
        return view('addCategory'); 
    }
}
