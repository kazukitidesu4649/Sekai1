@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
<h1 class="text-2xl font-bold text-center mb-6">Product</h1>

    @if ($products->isEmpty())
        <p class="text-center text-gray-600">Productがありません。</p>
    @else
        <div class="overflow-x-auto">
            <table class="table-auto w-full max-w-4xl mx-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-center">名前</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">説明</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">料金</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $product->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->content }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-right">¥{{ number_format($product->price) }}~</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
