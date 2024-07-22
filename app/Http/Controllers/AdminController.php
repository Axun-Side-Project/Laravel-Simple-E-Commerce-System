<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login(Request $request)
    {
        $crendentials = $request->only('email', 'password');

        $admin = Admin::where('email', Arr::get($crendentials, 'email'))->first();

        if (!$admin || !Hash::check(Arr::get($crendentials, 'password'), $admin->password)) {
            throw new \Exception('crendentials wrong');
        }

        $admin->tokens()->delete();

        return $admin->createToken('admin')->plainTextToken;
    }

}
