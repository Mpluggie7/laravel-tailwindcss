<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products_list;

class ProductsListController extends Controller
{
    public function index() {
        // eloquent
        $products_list = Products_list::paginate(3);
        // query builder
        // $products_list = DB::table('products_lists')->paginate(3);
        return view('products', compact('products_list'));
    }

    public function formAdd() {
        return view('form.Add');
    }

    public function store(Request $request) {
        // eloquent
        $request->validate([
            'productCode' => 'required|max:255',
            'productName' => 'required|max:255',
            'category' => 'required',
            'cost' => 'required',
            'wholesale' => 'required',
            'retail' => 'required'
        ],
        [
            'productCode.required' => 'Please not leave the blank!',
            'productCode.max' => 'Letter must equal or less than 255',
            'productName.required' => 'Please not leave the blank!',
            'productName.max' => 'Letter must equal or less than 255',
            'category.required' => 'Please not leave the blank!',
            'cost.required' => 'Please not leave the blank!',
            'wholesale.required' => 'Please not leave the blank!',
            'retail.required' => 'Please not leave the blank!',
        ]);

        $productListMD = new Products_list;
        $productListMD->category_id = $request->category; 
        $productListMD->code = $request->productCode; 
        $productListMD->name = $request->productName; 
        $productListMD->cost = $request->cost; 
        $productListMD->wholesale = $request->wholesale; 
        $productListMD->retail = $request->retail; 
        $productListMD->save();

        return redirect()->back()->with('success', 'Add product data complete');
    }
}
