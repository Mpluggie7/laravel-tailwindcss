@extends('layouts.main-layout')

@section('title')
	Category
@endsection

@section('content')
	<div class="text-center text-slate-600 mb-6 py-4">
		<h1 class="text-xl md:text-2xl font-semibold">Category List & Add New</h1>
	</div>

	<div class="grid grid-cols-3 gap-4">
		<div class="col-span-3 md:col-span-2 flex justify-center">
            <div class="bg-white rounded-xl border border-slate-300 shadow overflow-auto h-fit">
                <div class="my-8">
                    <table class="border-collapse text-sm">
                        <thead>
                            <tr>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-gray-700 text-left">No.</th>
                                <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-700 text-left">Category Name</th>
                                <th class="border-b font-medium text-center p-4 pt-0 pb-3 text-gray-700 text-left">Edit</th>
                                <th class="border-b font-medium text-center p-4 pr-8 pt-0 pb-3 text-gray-700 text-left">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-slate-800">
                            @foreach ($category_list as $row)
                                <tr>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-700 ">{{ $category_list->firstItem()+$loop->index }}</td>
                                    <td class="border-b border-slate-100 p-4 text-slate-700 ">{{ $row->name }}</td>
                                    <td class="border-b border-slate-100 p-4 text-slate-700 ">
                                        <a href='{{ url('category/edit/'.$row->id) }}' type="button" class="inline-block px-3 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md 
                                            cursor-pointer hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 
                                            active:shadow-lg transition duration-150 ease-in-out">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="border-b border-slate-100 p-4 text-slate-700 ">
                                        <a href='#' type="button" class="inline-block px-3 py-2.5 bg-red-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md 
                                            cursor-pointer hover:bg-red-500 hover:shadow-lg focus:bg-red-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 
                                            active:shadow-lg transition duration-150 ease-in-out">
                                            Delete
                                        </a>
                                    </td>                                
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-slate-400 text-sm px-8 mt-2">
                        {{ $category_list->links() }}
                    </div>
                </div>
            </div>
		</div>

        <div class="flex justify-center">
            <div class="bg-white rounded-xl border shadow border-slate-300 overflow-auto shadow hidden md:block h-fit">
                <div class="block bg-white w-64 mt-8 mb-6">
                    <div class="px-6 pb-2 border-b border-gray-300 text-center">
                        Add New Category
                    </div>
                    <div class="p-6 text-sm">
                        <form action="{{ route('addCategory') }}" method="POST">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="inputCategoryName" class="form-label inline-block mb-2 text-gray-700">Category Name</label>
                                <input type="text" name="categoryName" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                                    transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputCategoryName" aria-describedby="categoryNameHelp"
                                    value="{{ session()->has('categoryName') ? session('categoryName') : '' }}">
                                @error('categoryName')
                                    <span class="text-xs text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md 
                                hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg 
                                transition duration-150 ease-in-out">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
@endsection