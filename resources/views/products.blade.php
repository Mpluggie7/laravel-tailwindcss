@extends('layouts.main-layout')

@section('title')
	Products
@endsection

@section('content')
	<div class="text-center text-slate-600 mb-6 py-4">
		<h1 class="text-xl md:text-2xl font-semibold">Products List</h1>
	</div>

	<div class="flex sm:justify-center">
		<div class="bg-slate-50 rounded-xl border border-slate-300 overflow-hidden shadow">
			<div class="my-8">
				<table class="border-collapse text-sm">
					<thead>
						<tr>
							<th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">No.</th>
							<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">Category</th>
							<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">Code</th>
							<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">Name</th>
							<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">Stock</th>
							<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">Cost</th>
							<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">Wholesale</th>
							<th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">Retail</th>
						</tr>
					</thead>
					<tbody class="bg-white dark:bg-slate-800">
						@foreach ($products_list as $row)
							<tr>
								<td class="border-b border-slate-100 p-4 pl-8 text-slate-700 ">{{ $products_list->firstItem()+$loop->index }}</td>
								<td class="border-b border-slate-100 p-4 text-slate-700 ">{{ $row->cat_name }}</td>
								<td class="border-b border-slate-100 p-4 text-slate-700 ">{{ $row->code }}</td>
								<td class="border-b border-slate-100 p-4 text-slate-700 ">{{ $row->prod_name }}</td>
								<td class="border-b border-slate-100 text-right p-4 text-slate-700 ">stock</td>
								<td class="border-b border-slate-100 text-right p-4 text-slate-700 ">{{ round($row->cost, 2) }}</td>
								<td class="border-b border-slate-100 text-right p-4 text-slate-700 ">{{ round($row->wholesale, 2) }}</td>
								<td class="border-b border-slate-100 text-right p-4 pr-8 text-slate-700 ">{{ round($row->retail, 2) }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<div class="text-slate-400 text-sm px-8 mt-2">
					{{ $products_list->links() }}
				</div>
			</div>
		</div>
	</div>
@endsection