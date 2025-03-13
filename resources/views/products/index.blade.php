@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
  <h1 class="text-3xl font-extrabold text-center my-8 text-gray-800 border-b-4 border-gray-500 inline-block pb-2">
        Product
    </h1>

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


<!-- @extends('layouts.app')

@section('content')
  <div class="container">
    <h1>商品一覧</h1>
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        @if ($products->isEmpty())
            <p>Productがありません。</p>
        @else
          <ul>
              @foreach ($products as $product)
                  <li>
                      <a>{{ $product->name }} | {{ $product->content }} | ¥{{ $product->price }} ~</a>
                  </li>
              @endforeach
          </ul>
        @endif
  </div>
@endsection -->
