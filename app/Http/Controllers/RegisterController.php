<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register.register', [
            'active' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}
