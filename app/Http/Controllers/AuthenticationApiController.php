<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthenticationApiController extends Controller
{
    public function index(){
        return User::all();
    }

    public function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
    
        // $user = User::where('email', $validated['email'])->first();
        // if (!$user || !Hash::check($validated['password'], $user->password)) {
        //     return response([
        //         'message' => "Incorrect Credentials"
        //     ], 401);
        // }
    
        // $token = $user->createToken('myapptoken')->plainTextToken;
        // return response([
        //     'user' => $user,
        //     'token' => $token
        // ], 200);
    }
    
    public function logout(Request $request) {
        $request->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });
    
        return response([
            'message' => 'Logged out successfully'
        ]);
    }  
}
