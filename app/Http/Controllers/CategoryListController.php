<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryListController extends Controller
{
    public function index()
    {
        return view('form.form-add-category');
    }
}
