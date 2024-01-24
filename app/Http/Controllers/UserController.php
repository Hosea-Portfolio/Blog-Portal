<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index', [
            'users' =>   User::with('Role')->get()
            // 'posts' => Post::where('user_id', auth()->user()->id)->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create', [
            'roles' => Role::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'role_id' => 'required',
            'name' => 'required|max:255|regex:/^[a-zA-Z]+$/u|unique:users,name',
            'username' => 'required|max:20',
            'email' => 'required|email:rfc,dns',
            'password' => 'required',

        ]);

        User::create($validatedData);

        return redirect('/admin/dashboard/users')->with('success', 'New user has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {


        return view('admin.users.edit', [
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'role_id' => 'required',
            'name' => 'required|max:255|unique:users,name',
            'username' => 'required|max:20',
            'email' => 'required|email:rfc,dns',
            'password' => 'required',

        ]);

        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/admin/dashboard/users')->with('success', 'User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/admin/dashboard/users')->with('success', 'User has been deleted!');
    }
    public function unpublish($id)
    {
        $data = User::find($id);

        $data->active = 0;
        $data->save();
        return redirect('/admin/dashboard/users');
    }
    public function publish($id)
    {
        $data = User::find($id);

        $data->active = 1;
        $data->save();
        return redirect('/admin/dashboard/users');
    }
}
