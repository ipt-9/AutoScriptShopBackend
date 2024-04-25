<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user instance
        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->password = bcrypt($request->input('password'));
        $user->updated_at = now();
        $user->created_at = now();
        $user->save();
        return response()->json(['message' => 'User created successfully'],201);
    }
}
