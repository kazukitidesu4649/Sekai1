@extends('layouts.app')

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
                      <a>{{ $product->name }} - ¥{{ $product->price }}</a>
                  </li>
              @endforeach
          </ul>
        @endif
  </div>
@endsection
