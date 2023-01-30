<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class category extends Controller
{
    public function addCategory()
    {
        return view('addCategory'); 
    }

    public function saveCategory(Request $request)
    {
        $request->validate(['category_name' => 'required|max:255']);

        $categoryName = $request->input('category_name');
        $categoryDescription = $request->input('category_description');


        $isCategoryExist = DB::table('categories')->select('category_name')->where('category_name', '=', $categoryName)->get();
        if (count($isCategoryExist)) {
            return back()->with('err_msg' , "ERROR : Category '$categoryName' is already exist");
        } else {
            DB::table('categories')->insert(['category_name' => $categoryName, 'category_description' => $categoryDescription]);
            return back()->with('success_msg' , "'$categoryName' has been Saved ");
        }
        
        

    }
}
