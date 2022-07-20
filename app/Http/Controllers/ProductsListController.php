<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products_list;
use App\Models\Category;

class ProductsListController extends Controller
{
    public function index() {
        $products_list = Products_list::
            select('products_lists.*', 'products_lists.id as prod_id', 'products_lists.name as prod_name','categories.*', 'categories.name as cat_name')
            ->leftJoin('categories', function($join) {
                $join->on('products_lists.category_id', '=', 'categories.id');
            })
            ->orderBy('products_lists.updated_at', 'desc')->paginate(3);
        
        session()->flush();
        return view('products', compact('products_list'));
    }

    public function search(Request $request)
    {
        $request->session()->flash('productSearch', $request->productSearch);
        
        $request->validate([
            'productSearch' => 'required|min:3|max:255',
        ]);
        $productSearch = $request->productSearch;

        $products_list = Products_list::
            select('products_lists.*', 'products_lists.id as prod_id', 'products_lists.name as prod_name','categories.*', 'categories.name as cat_name')
            ->leftJoin('categories', function($join) {
                $join->on('products_lists.category_id', '=', 'categories.id');
            })
            ->where('categories.name', 'like', '%'.$productSearch.'%')
            ->orWhere('code', 'like', '%'.$productSearch.'%')
            ->orWhere('products_lists.name', 'like', '%'.$productSearch.'%')
            ->paginate(1);

        return view('products', compact('products_list'));
    }

    public function formAddProduct() {
        $category = Category::all();
        return view('form.product-add', compact('category'));
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
        return redirect()->route('products')->with('success', 'Add product data complete');
    }

    public function formEdit($id)
    {
        $product = Products_list::find($id);
        $category = Category::all();
        return view('form.product-edit', compact('product', 'category'));
    }

    public function update(Request $request, $id)
    {
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
        ]);

        $productFind = Products_list::where('code', $request->productCode)
            ->where('name', $request->productName)
            ->where('category_id', $request->category)
            ->where('cost', $request->cost)
            ->where('wholesale', $request->wholesale)
            ->where('retail', $request->retail)
            ->get();
        
        if ($productFind->count() > 0) {
            return redirect()->back()->with('error', 'All data are duplicate!');

        } else {
            $productUpdate = Products_list::find($id);
            $productUpdate->category_id = $request->category; 
            $productUpdate->code = $request->productCode; 
            $productUpdate->name = $request->productName; 
            $productUpdate->cost = $request->cost; 
            $productUpdate->wholesale = $request->wholesale; 
            $productUpdate->retail = $request->retail; 
            $productUpdate->save();

            $request->session()->flush();
            return redirect()->route('products')->with('success', 'Update product data complete');
        }
    }
}
