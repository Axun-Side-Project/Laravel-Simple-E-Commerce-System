<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $crendentials = $request->only('email', 'password');

        $user = User::where('email', Arr::get($crendentials, 'email'))->first();

        if (!$user || ! Hash::check(Arr::get($crendentials, 'password'), $user->password)) {
            throw new \Exception('crendentials wrong');
        }

        $user->tokens()->delete();

        return $user->createToken('user')->plainTextToken;
    }

}
