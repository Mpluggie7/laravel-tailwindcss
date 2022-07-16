<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryListController extends Controller
{
    public function index() {
        // eloquent
        $category_list = Category::orderBy('updated_at', 'desc')->paginate(3);
        // query builder
        // $category_list = DB::table('categories')->paginate(3);

        return view('categories', compact('category_list'));
    }

    public function insert(Request $request)
    {
        // dd($request->category_name);
        $request->session()->flash('categoryName', $request->categoryName);

        $request->validate([
            'categoryName' => 'required|unique:categories,name|max:255'
        ],
        [
            'categoryName.required' => 'Please not leave the blank!',
            'categoryName.max' => 'Letter must equal or less than 255',
            'categoryName.unique' => 'Name category has existed'
        ]);

        $categoryListMD = new Category;
        $categoryListMD->name = $request->categoryName;
        $categoryListMD->save();

        $request->session()->flush();
        return redirect()->back()->with('success', 'Add category data complete');
    }

    public function update($id)
    {
        $categoryFind = Category::find($id);

        return view('form.edit-category', compact('categoryFind'));
    }
}
