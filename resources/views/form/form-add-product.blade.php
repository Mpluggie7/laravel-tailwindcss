@extends('layouts.main-layout')

@section('title')
	Form Add
@endsection

@section('content')
    <div class="text-center text-slate-600 mb-6 py-4">
        <h1 class="text-xl md:text-2xl font-semibold">Form Add New Products</h1>
    </div>

    <div class="flex justify-center">
        @if (session("success"))
            <div class="rounded-lg border text-sm border-green-400 shadow-lg bg-green-200 w-96 mb-2 text-gray-500 p-2 px-4">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white w-96">
            <form action="{{ route('addProduct') }}" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="inputProductCode" class="form-label inline-block mb-2 text-gray-700">Product Code</label>
                    <input type="text" name="productCode" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputProductCode" aria-describedby="codeHelp"
                        value="{{ session()->has('productCode') ? session('productCode') : '' }}">
                    <small id="codeHelp" class="block mt-1 text-xs text-gray-300">
                        For product searching by code or barcode.
                    </small>
                    @error('productCode')
                        <span class="text-xs text-red-400">{{ $message }}</span>
                    @enderror
                </div>
                

                <div class="form-group mb-2">
                    <label for="inputProductName" class="form-label inline-block mb-2 text-gray-700">Product Name</label>
                    <input type="text" name="productName" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputProductName"
                        value="{{ session()->has('productName') ? session('productName') : '' }}">
                    @error('productName')
                        <span class="text-xs text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="inputCategory" class="form-label inline-block mb-2 text-gray-700">Category</label>
                    <select name="category" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid 
                        border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        <option {{ session()->has('category') ? '' : 'selected' }}></option>
                        @foreach ($category as $row)
                            <option value="{{ $row->id }} {{ session()->has('category') ? ( session('category') == $row->id ? 'selected' : '' ) : '' }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="text-xs text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="inputCost" class="form-label inline-block mb-2 text-gray-700">Cost</label>
                    <input type="text" name="cost" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputCost"
                        value="{{ session()->has('cost') ? session('cost') : '' }}">
                    @error('cost')
                        <span class="text-xs text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="inputWholesale" class="form-label inline-block mb-2 text-gray-700">Wholesale</label>
                    <input type="text" name="wholesale" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputWholesale"
                        value="{{ session()->has('wholesale') ? session('wholesale') : '' }}">
                    @error('wholesale')
                        <span class="text-xs text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="inputRetail" class="form-label inline-block mb-2 text-gray-700">Retail</label>
                    <input type="text" name="retail" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputRetail"
                        value="{{ session()->has('retail') ? session('retail') : '' }}">
                    @error('retail')
                        <span class="text-xs text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="inputStock" class="form-label inline-block mb-2 text-gray-700">Stock</label>
                    <input type="text" name="stock" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputStock"
                        value="{{ session()->has('stock') ? session('stock') : '' }}">
                </div>

                <button type="submit" class=" px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection