<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return to_route('login')->with('status', 'Su cuenta fue creada');
    }
}
