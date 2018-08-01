<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index() 
    {
        return view('index');
    }
}
