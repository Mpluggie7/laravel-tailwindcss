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
                                <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-700 text-left">Category</th>
                                <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-700 text-left">Code</th>
                                <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-700 text-left">Name</th>
                                <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-700 text-left">Stock</th>
                                <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-700 text-left">Cost</th>
                                <th class="border-b font-medium p-4 pt-0 pb-3 text-gray-700 text-left">Wholesale</th>
                                <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-gray-700 text-left">Retail</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-slate-800">
                            {{-- @foreach ($products_list as $row)
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
                            @endforeach --}}
                        </tbody>
                    </table>
                    <div class="text-slate-400 text-sm px-8 mt-2">
                        {{-- {{ $products_list->links() }} --}}
                    </div>
                </div>
            </div>
		</div>

        <div class="flex justify-center">
            <div class="bg-slate-50 rounded-xl border border-slate-300 overflow-auto shadow hidden md:block">
                <div class="block rounded-lg shadow-lg bg-white w-64 text-center">
                    <div class="py-3 px-6 border-b border-gray-300">
                        New Category
                    </div>
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">ss</h5>
                        <p class="text-gray-700 text-base mb-4">
                        With supporting text below as a natural lead-in to additional content.
                        </p>
                        <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                    </div>
                    <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
                        2 days ago
                    </div>
                </div>
            </div>
        </div>
	</div>
@endsection