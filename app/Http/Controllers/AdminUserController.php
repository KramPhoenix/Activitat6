<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index(){

        $users = User::all();

        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.users.edit', [
            'user' => $user,
            'id' => $id,
        ]);
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        $input = $request->all();

        $input = $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'passwd' => 'required',
        ]);

        $data = [
            'name' => $input['nombre'],
            'email'  => $input['email'],
            'password'  => Hash::make($input['passwd']),
        ];

        $user->update($data);
        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.users.index');
    }
}
