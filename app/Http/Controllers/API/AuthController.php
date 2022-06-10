<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;




class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json('Error!', $validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('RT')->plainTextToken;

        $response = [
            'User - ' => $user,
            'Token - ' => $token,
        ];

        return response()->json($response);
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json('Error!', $validator->errors());
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['Login Info' => 'Please try again!']);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('LT')->plainTextToken;

        $response = [
            'User - ' => $user,
            'Token - ' => $token,
        ];

        return response()->json($response);
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('Logout successful!');
    }
}
