<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(LoginUserRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            return ['token' => $request->user()->createToken('auth_token')->plainTextToken];
        }
        return("joa hat doch nicht funktioniert");
    }
}
