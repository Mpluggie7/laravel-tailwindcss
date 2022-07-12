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
			<div class="shadow-sm my-8">
				<table class="border-collapse text-sm">
					<thead>
						<tr>
							<th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">No.</th>
							<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">Categoly</th>
							<th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">Code</th>
							<th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">Stock</th>
							<th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">Price</th>
						</tr>
					</thead>
					<tbody class="bg-white dark:bg-slate-800">
						<tr>
							<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Shining Star</td>
							<td class="border-b border-slate-100 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
						</tr>
						<tr>
							<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Shining Star</td>
							<td class="border-b border-slate-100 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
						</tr>
						<tr>
							<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Shining Star</td>
							<td class="border-b border-slate-100 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
						</tr>
						<tr>
							<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Shining Star</td>
							<td class="border-b border-slate-100 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
						</tr>
						<tr>
							<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Shining Star</td>
							<td class="border-b border-slate-100 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
						</tr>
						<tr>
							<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Shining Star</td>
							<td class="border-b border-slate-100 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
							<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1975</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection