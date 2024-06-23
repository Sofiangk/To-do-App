<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return response([
                'message' => 'Failed to authenticate',
            ], 401);
        }
        $Token =auth()->user()->createToken('User_token')->plainTextToken;
        $Token = explode('|',$Token);
        return response([
            'user' => auth()->user(),
            'token' =>$Token[1] ,
            'token_type' => 'Bearer',
        ], 200);
    }
    public function logout() {

        Auth::user()->tokens()->delete();

        return response([
            'message' => 'User tokens deleted successfully',
        ], 200);
    }
}
