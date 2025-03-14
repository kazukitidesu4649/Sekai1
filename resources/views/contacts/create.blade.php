@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold text-center mb-6">Contact</h1>

    @if(session('success'))
      <div x-data="{ show: true }" 
          x-show="show"
          x-transition
          @click="show = false"
          x-init="setTimeout(() => show = false, 3000)"
          class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
          <div class="bg-gray-800 text-white px-6 py-4 rounded shadow-lg cursor-pointer">
              {{ session('success') }}
          </div>
      </div>
    @endif


    <div class="bg-white shadow-md rounded p-6 max-w-lg mx-auto">
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <table class="table-auto w-full">
                <tbody>
                    <tr>
                        <td class="py-2 px-4 font-semibold">お名前</td>
                        <td class="py-2 px-4">
                            <input type="text" name="name" class="w-full p-2 border rounded" value="{{ old('name') }}" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">メールアドレス</td>
                        <td class="py-2 px-4">
                            <input type="email" name="email" class="w-full p-2 border rounded" value="{{ old('email') }}" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">電話番号</td>
                        <td class="py-2 px-4">
                            <input type="text" name="phone" class="w-full p-2 border rounded" value="{{ old('phone') }}">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">お問い合わせ内容</td>
                        <td class="py-2 px-4">
                            <textarea name="message" class="w-full p-2 border rounded" rows="4" required>{{ old('message') }}</textarea>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center mt-6">
                <button type="submit" class="bg-[#e7e9ee] text-gray-800 px-6 py-2 rounded hover:bg-[#d0d3db] border border-gray-400">
                    送信する
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
