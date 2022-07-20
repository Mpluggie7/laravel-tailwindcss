@extends('layouts.main-layout')

@section('title')
	Product - Edit
@endsection

@section('content')
    <div class="text-center text-slate-600 mb-6 py-4">
        <h1 class="text-xl md:text-2xl font-semibold">Product Edit</h1>
    </div>

    @if (session("error"))
		<div class="flex sm:justify-center">
            <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700 mb-3 w-96" role="alert">
				{{ session('error') }}
			</div>
		</div>
	@endif

    <div class="flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white w-96">
            <form action="{{ url('/products/edit/'.$product->id) }}" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <label for="inputProductCode" class="form-label inline-block mb-2 text-gray-700">Product Code</label>
                    <input type="text" name="productCode" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputProductCode" aria-describedby="codeHelp"
                        value="{{ session()->has('productCode') ? session('productCode') : $product->code }}">
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
                        value="{{ session()->has('productName') ? session('productName') : $product->name }}">
                    @error('productName')
                        <span class="text-xs text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="inputCategory" class="form-label inline-block mb-2 text-gray-700">Category</label>
                    <select name="category" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid 
                        border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        @foreach ($category as $row)
                            @if (session()->has('category'))
                                {{ $select = session('category') == $row->id ? 'selected' : '' }}
                            @else
                                {{ $select = $product->category_id == $row->id ? 'selected' : '' }}
                            @endif
                            <option value="{{ $row->id }}" {{ $select }}>{{ $row->name }}</option>
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
                        value="{{ session()->has('cost') ? session('cost') : $product->cost }}">
                    @error('cost')
                        <span class="text-xs text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="inputWholesale" class="form-label inline-block mb-2 text-gray-700">Wholesale</label>
                    <input type="text" name="wholesale" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputWholesale"
                        value="{{ session()->has('wholesale') ? session('wholesale') : $product->wholesale }}">
                    @error('wholesale')
                        <span class="text-xs text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="inputRetail" class="form-label inline-block mb-2 text-gray-700">Retail</label>
                    <input type="text" name="retail" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded 
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputRetail"
                        value="{{ session()->has('retail') ? session('retail') : $product->retail }}">
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