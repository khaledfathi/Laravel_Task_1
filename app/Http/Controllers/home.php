<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class home extends Controller
{
    public function homePage (){
        $categories = DB::table('categories')->get();

        $avaliableProducts = DB::table('categories')->
            Join('products_classified', 'products_classified.category_id', "=", 'categories.id')->
            Join('products', 'products.id', "=", 'products_classified.product_id')->
            select('categories.category_name' , 'products.product_name')->
            orderBy('category_name','asc')->get(); 
        return view('home', compact(['categories' , 'avaliableProducts'])); 
    }
}
