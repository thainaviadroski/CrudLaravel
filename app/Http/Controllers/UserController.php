<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $user = new User();

        $u = $user->orderByDesc('id')->get();
        //dd($user->orderByDesc('id'));

        return view('users.index', ['users' => $u]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function save(UserRequest $request)
    {
        $request->validated();

        $user = new User();
        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $user->save();

        // User::created([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);



        return redirect()->route('user.index')->with('success', 'Cadatrado com sucesso!');
    }
}
