<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
        public function register(Request $request)
        {
            $attributes = $request->validate([
                'name'=>'required',
                'email'=>'required|email|unique:users,email',
                'password'=>'required',
                'address'=>'required',
                'phone_number'=>'required',
                'gender'=>'required'
            ]);

            $user = User::create($attributes);

            $token = $user->createToken('api-token')->accessToken;

            return response()->json([
                'status' => true,
                'message' => 'user registered successfully',
                'token' => $token
            ]);
        }

        public function login(Request $request)
        {
            $attributes = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if(!auth()->attempt($attributes)){

                return response()->json([
                    'status' => false,
                    'message' => 'Invalid Credentials'
                ]);
            }

            $user = User::firstwhere('email',$request->email);

            $token = $user->createToken('api-token')->accessToken;

            return response()->json([
                'status' => true,
                'message' => 'user logged in successfully',
                'access_token' => $token
            ]);
        }

        public function logout(Request $request)
        {
            $token = $request->user()->token();

            $token->revoke();

            return response()->json([
                'status' => true,
                'message' => 'user logged out successfully'
            ]);
        }

        public function profile(Request $request)
        {
            return response()->json([
                'status' => true ,
                'data' => auth()->user()
            ]);
        }
}
