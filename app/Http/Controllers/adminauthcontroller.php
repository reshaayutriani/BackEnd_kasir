<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class adminauthcontroller extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::User();
            $token = Auth::User()->createToken('TokenName')->accessToken;

            return response()->json(['token' => $token, 'user' => $user], Response::HTTP_OK);
        } else {
            return response()->json(['message' => "Email or password doesnt match record"], 
            Response::HTTP_UNAUTHORIZED);
        }
    }
}
