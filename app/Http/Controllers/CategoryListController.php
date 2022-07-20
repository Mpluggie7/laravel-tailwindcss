<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryListController extends Controller
{
    public function index() {
        $category_list = Category::orderBy('updated_at', 'desc')->paginate(3);

        return view('categories', compact('category_list'));
    }

    public function search(Request $request)
    {
        $request->session()->flash('categorySearch', $request->categorySearch);
        $request->validate([
            'categorySearch' => 'required|min:3|max:255'
        ],
        [
            'categorySearch.required' => 'Please not leave the blank!',
            'categorySearch.min' => 'Letter must equal or more than 3',
            'categorySearch.max' => 'Letter must equal or less than 255'
        ]);

        $category_list = Category::where('name', 'like', '%'.$request->categorySearch.'%')->paginate(3);  
        return view('categories', compact('category_list'));
    }

    public function formAddCategory()
    {
        return view('form.category-add');
    }

    public function insert(Request $request)
    {
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

    public function formEdit($id)
    {
        $categoryFind = Category::find($id);
        return view('form.category-edit', compact('categoryFind'));
    }

    public function update(Request $request, $id)
    {
        $request->session()->flash('categoryName', $request->categoryName);

        $request->validate([
            'categoryName' => 'required|unique:categories,name|max:255'
        ],
        [
            'categoryName.required' => 'Please not leave the blank!',
            'categoryName.max' => 'Letter must equal or less than 255',
            'categoryName.unique' => 'Name category has existed'
        ]);

        $categoryFind = Category::find($id)->update([
            'name'=>$request->categoryName
        ]);

        return redirect()->route('categories')->with('success', 'Edit category name complete');
    }
}
