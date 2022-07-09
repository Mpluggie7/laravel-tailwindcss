@extends('layouts.main-layout')

@section('title')
	Products
@endsection

@section('content')
	<div class="md:pl-60 max-h-full w-full bg-gray-50">
		<div class="container p-4 overflow-hidden">
				
				<div class="text-center text-slate-600 mb-6 py-4">
					<h1 class="text-2xl md:text-4xl font-semibold">All Products</h1>
				</div>

				<div class="flex sm:justify-center">
					<div class="bg-slate-50 rounded-xl border border-slate-300 overflow-hidden">
						<div class="shadow-sm my-8">
							<table class="border-collapse text-sm w-full">
								<thead>
									<tr>
										<th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Song</th>
										<th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">Artist</th>
										<th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">Year</th>
									</tr>
								</thead>
								<tbody class="bg-white dark:bg-slate-800">
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">Malcolm Lockyer</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1961</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Witchy Woman</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">The Eagles</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1972</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">Malcolm Lockyer</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1961</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Witchy Woman</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">The Eagles</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1972</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">Malcolm Lockyer</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1961</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Witchy Woman</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">The Eagles</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1972</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">Malcolm Lockyer</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1961</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Witchy Woman</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">The Eagles</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1972</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">Malcolm Lockyer</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1961</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Witchy Woman</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">The Eagles</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1972</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">Malcolm Lockyer</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1961</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Witchy Woman</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">The Eagles</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1972</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">Malcolm Lockyer</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1961</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Witchy Woman</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">The Eagles</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1972</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">Malcolm Lockyer</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1961</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Witchy Woman</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">The Eagles</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1972</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">Malcolm Lockyer</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1961</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Witchy Woman</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">The Eagles</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1972</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">Malcolm Lockyer</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1961</td>
									</tr>
									<tr>
										<td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">Witchy Woman</td>
										<td class="border-b border-slate-100 p-4 text-slate-500 ">The Eagles</td>
										<td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">1972</td>
									</tr>
									<tr>
										<td class="border-b border-slate-200 p-4 pl-8 text-slate-500 ">Shining Star</td>
										<td class="border-b border-slate-200 p-4 text-slate-500 ">Earth, Wind, and Fire</td>
										<td class="border-b border-slate-200 p-4 pr-8 text-slate-500 ">1975</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5"></div>
					</div>
				</div>

		</div>
	</div>
@endsection