@extends('layouts.main-layout')

@section('title')
	Category - Add New
@endsection

@section('content')
    <div class="text-center text-slate-600 mb-6 py-4">
        <h1 class="text-xl md:text-2xl font-semibold">Category Add New</h1>
    </div>

    <div class="flex justify-center">
        <div class="bg-white rounded-xl border shadow border-slate-300 overflow-auto shadow hidden md:block h-fit">
            <div class="block bg-white w-64 mt-8 mb-6">
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
@endsection