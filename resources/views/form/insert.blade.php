@extends('layouts.main-layout')

@section('title')
	Add New
@endsection

@section('content')
    <div class="text-center text-slate-600 mb-6 py-4">
        <h1 class="text-xl md:text-2xl font-semibold">Add New Products</h1>
    </div>

    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
        <form>
            <div class="form-group mb-6">
                <label for="inputProductCode" class="form-label inline-block mb-2 text-gray-700">Product Code</label>
                <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                    transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputProductCode" aria-describedby="codeHelp" placeholder="Enter code">
                <small id="codeHelp" class="block mt-1 text-xs text-gray-600">
                    For product searching by code or barcode.
                </small>
            </div>
            <div class="form-group mb-6">
                <label for="inputProductName" class="form-label inline-block mb-2 text-gray-700">Product Name</label>
                <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                    transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputProductName" placeholder="Enter name">
            </div>
            <div class="form-group mb-6">
                <label for="inputCategory" class="form-label inline-block mb-2 text-gray-700">Category</label>
                <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                    transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputCategory" placeholder="Enter category">
            </div>
            <button type="submit" class=" px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Submit
            </button>
        </form>
    </div>
@endsection