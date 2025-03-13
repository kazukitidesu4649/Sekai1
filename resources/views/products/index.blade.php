@extends('layouts.app')

@section('content')
<h1>商品一覧</h1>
<a href="{{ route('products.create') }}">新規追加</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<ul>
    @foreach ($products as $product)
        <li>
            <a href="{{ route('products.show', $product) }}">{{ $product->name }} - ¥{{ $product->price }}</a>
        </li>
    @endforeach
</ul>
@endsection
