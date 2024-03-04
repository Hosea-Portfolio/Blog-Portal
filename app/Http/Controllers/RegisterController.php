<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:users,name',
            'email' => 'required|email:dns|unique:users,email',
            'username' => 'required|max:255|unique:users,username',
            'password' => 'required|confirmed',
        ]);
        $validatedData['role_id'] = 2;
        $validatedData['password_decode'] = $request->password;
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin/sign-in');
    }
}
