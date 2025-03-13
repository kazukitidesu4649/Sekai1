<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 商品一覧
    public function index() {

        $product = Product::all();
        return view('products.index', compact('products'));
    }

    // 商品作成フォーム表示
    public function create() {
        return view('products.create');
    }

    // 商品の新規保存
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'content' => 'nullable|string',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', '商品を登録しました！');
    }


    /**
     * 商品詳細表示
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // 商品編集フォーム
    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }

    // 商品の更新
    public function update(Request $request, Product $product) {
        $request->validate([
            'name' => 'request|string|max:255',
            'price' => 'request|numeric|min:0',
            'content' => 'nullable|string',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', '商品を更新しました！');
    }

    // 商品の削除
    public function destroy(Product $product) {
        $product->delete();

        return redirect()->route('products.index')->with('success', '商品を削除しました！');
    }
}
