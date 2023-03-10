<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        // print_r($data);
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                    'message' => ['These credentials do not match our records.'],
                ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
                'user' => $user,
                'token' => $token,
            ];

        return response($response, 201);
    }

    public function users()
    {
        return User::all();

    }
}
