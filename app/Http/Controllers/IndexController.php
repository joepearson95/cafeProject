<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Products;

class IndexController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('index', ['products' => $products]);
    }

    public function productInformation($id)
    {
        $productInformation = Products::find($id);
        return view('productInfo', ['productInformation' => $productInformation]);
    }

    /*public function cartInsert()
    {
        return 1;
    }*/
}
