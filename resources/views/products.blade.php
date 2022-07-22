@extends('layouts.main-layout')

@section('title')
	Products
@endsection

@section('content')
	<div class="text-center text-slate-600 mb-6 py-4">
		<h1 class="text-xl md:text-2xl font-semibold">Products List</h1>
	</div>

	

	<div class="flex sm:justify-center mb-6">
		<form class="w-full lg:w-1/2 overflow-auto" action="{{ route('searchProduct') }}" method="GET">
			@csrf
			<div class="input-group relative flex flex-wrap items-stretch w-full">
				<input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding 
					border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
					placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="productSearch"
					value="{{ old('productSearch') }}">
				<button class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 
					hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 
					ease-in-out flex items-center" type="submit" id="button-addon2">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 
						512 512">
					<path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 
						208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 
						0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
					</svg>
				</button>
			</div>
			@error('productSearch')
				<span class="text-xs text-red-400">{{ $message }}</span>
			@enderror
		</form>
	</div>

	@if (session("success"))
		<div class="flex sm:justify-center">
			<div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3 w-96" role="alert">
				{{ session('success') }}
			</div>
		</div>
	@endif
	
	@if ($products_list->count() > 0)
		<div class="flex sm:justify-center">
			<div class="bg-slate-50 rounded-xl border border-slate-300 overflow-auto shadow">
				<div class="my-8">
					<table class="border-collapse text-sm">
						<thead>
							<tr>
								<th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">No.</th>
								<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">Category</th>
								<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">Code</th>
								<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">Name</th>
								<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-right">Stock</th>
								<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-right">Cost</th>
								<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-right">Wholesale</th>
								<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-right">Retail</th>
								<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-center">Edit</th>
								<th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-center">Delete</th>
							</tr>
						</thead>
						<tbody class="bg-white dark:bg-slate-800">
							@foreach ($products_list as $row)
								<tr>
									<td class="border-b border-slate-100 p-4 pl-8 text-slate-700 ">{{ $products_list->firstItem()+$loop->index }}</td>
									<td class="border-b border-slate-100 p-4 text-slate-700 ">{{ $row->cat_name }}</td>
									<td class="border-b border-slate-100 p-4 text-slate-700 ">{{ $row->code }}</td>
									<td class="border-b border-slate-100 p-4 text-slate-700 ">{{ $row->prod_name }}</td>
									<td class="border-b border-slate-100 text-right p-4 text-slate-700 ">{{ $row->sum_stock }}</td>
									<td class="border-b border-slate-100 text-right p-4 text-slate-700 ">{{ round($row->cost, 2) }}</td>
									<td class="border-b border-slate-100 text-right p-4 text-slate-700 ">{{ round($row->wholesale, 2) }}</td>
									<td class="border-b border-slate-100 text-right p-4 text-slate-700 ">{{ round($row->retail, 2) }}</td>
									<td class="border-b border-slate-100 p-4 text-slate-700 ">
										<a href="{{ url('products/form-edit/'.$row->prod_id) }}" type="button" class="inline-block px-3 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md 
											cursor-pointer hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 
											active:shadow-lg transition duration-150 ease-in-out">
											Edit
										</a>
									</td>
									<td class="border-b border-slate-100 p-4 pr-8 text-slate-700 ">
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
						{{ $products_list->appends(Request::all())->links() }}
					</div>
				</div>
			</div>
		</div>
	@else
		<div class="flex sm:justify-center">
			<div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700 mb-3 w-1/2" role="alert">
				No found product data!
			</div>
		</div>
	@endif
	
@endsection