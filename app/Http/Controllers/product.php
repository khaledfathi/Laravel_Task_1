<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class product extends Controller
{
    public function addProduct()
    {
        $categories = DB::table('categories')->get();
        return view('addProduct',compact('categories')); 
    }
    public function saveProduct(Request $request)
    {
        $request->validate(['product_name'=>'required|max:255' , 'categories'=>'required']);

        $categories = $request->input('categories');  
        $productName = $request->input('product_name');

        $isProductExist = DB::table('products')->select('product_name')->where('product_name', '=', $productName)->get();

        if (count($isProductExist)){
            return back()->with('err_msg', "Product '$productName' is already exist!");
        } else {
            DB::table('products')->insert(['product_name' => $productName]);
            $productID = DB::table('products')->latest('id')->first()->id;
            
            foreach ($categories as $category) {
                DB::table('products_classified')->insert(['product_id' => $productID , 'category_id' => $category] );
            }
            return back()->with('success_msg', 'Product has been saved'); 
        }
    }
}
