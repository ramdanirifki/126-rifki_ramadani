<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = DB::select('SELECT * FROM tbl_product');
        $foodProducts = DB::select('SELECT * FROM tbl_product WHERE category = ?', ['food']);
        $drinkProducts = DB::select('SELECT * FROM tbl_product WHERE category = ?', ['drink']);
        $cakeProducts = DB::select('SELECT * FROM tbl_product WHERE category = ?', ['cake']);
        $mieProducts = DB::select('SELECT * FROM tbl_product WHERE category = ?', ['mie']);
        return view('pages.main-page', compact('products', 'foodProducts', 'drinkProducts', 'cakeProducts', 'mieProducts'));
    }
}
