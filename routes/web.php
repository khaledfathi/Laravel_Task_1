<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\category;
use App\Http\Controllers\product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home 
route::get('/', [home::class , 'homePage']); 

//Category
route::get('addCategory', [category::class , 'addCategory']); 
route::post('addCategory', [category::class , 'saveCategory']); 


//Product
route::get('addProduct', [product::class , 'addProduct']); 
route::post('addProduct', [product::class , 'saveProduct']); 