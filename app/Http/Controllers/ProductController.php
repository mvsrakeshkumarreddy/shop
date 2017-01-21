<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    
	public function index()
	{
		$products = Product::all();
		//return $products;
		return view('products.index')->with('products',$products);
	}











}
