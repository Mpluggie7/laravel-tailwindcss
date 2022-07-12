<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsListController extends Controller
{
    public function index() {
        return view('products');
    }

    public function insert() {
        return view('form.insert');
    }
}
