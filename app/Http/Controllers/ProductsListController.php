<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products_list;
use App\Models\Category;

class ProductsListController extends Controller
{
    public function index() {
        // eloquent
        // $products_list = Products_list::all();
        $products_list = Products_list::select('products_lists.*', 'products_lists.name as prod_name','categories.*', 'categories.name as cat_name')
            ->leftJoin('categories', function($join) {
                $join->on('products_lists.category_id', '=', 'categories.id');
            })
            ->orderBy('products_lists.updated_at', 'desc')->paginate(3);
        // query builder
        // $products_list = DB::table('products_lists')->paginate(3);
        return view('products', compact('products_list'));
    }

    public function formAddProduct() {
        // eloquent
        $category = Category::orderBy('name')->get();
        return view('form.add-product', compact('category'));
    }

    public function insert(Request $request) {
        $request->session()->flash('productCode', $request->productCode);
        $request->session()->flash('productName', $request->productName);
        $request->session()->flash('category', $request->category);
        $request->session()->flash('cost', $request->cost);
        $request->session()->flash('wholesale', $request->wholesale);
        $request->session()->flash('retail', $request->retail);
        $request->session()->flash('stock', $request->stock);

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

        $request->session()->flush();
        return redirect()->back()->with('success', 'Add product data complete');
    }
}
