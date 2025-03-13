<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create() {
        return view('contacts.create');
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'string|max:255',
            'message' => 'required|string|max:255',
        ]);

        Contact::create($request->all());

        return redirect()->route('contacts.create')->with('success', 'お問い合わせが完了しました！');
    }
}
