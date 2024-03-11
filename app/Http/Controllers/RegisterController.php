<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

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


    public function forgotpassword()
    {
        return view('admin.forgot-password.forgot-password', [
            'active' => 'Forgot Password'
        ]);
    }

    public function forgotpasswordpost(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns|exists:users,email',
        ]);
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('admin.email.email', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject("Reset Your Password");
        });
        return redirect()->back();
    }

    public function resetpassword($token)
    {
        return view('admin.forgot-password.new-password', [
            'active' => 'Reset Password',
            'token' => $token
        ]);
    }

    public function resetpasswordpost(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns|exists:users,email',
            'password' => 'required|confirmed',
        ]);
        $updatepassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])->first();

        if (!$updatepassword) {
            return redirect()->back();
        }

        User::where('email', $request->email)->update(['password_decode' => $request->password, 'password' => Hash::make($request->password)]);

        DB::table('password_resets')
            ->where([
                'email' => $request->email
            ])->delete();

        return redirect('/admin/sign-in');
    }
}
