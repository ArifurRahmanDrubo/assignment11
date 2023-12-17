<?php


// app/Http/Controllers/SaleController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function index()
    {
        $sales = DB::table('products')->get();
        return view('sales.index', compact('sales'));
    }
}

