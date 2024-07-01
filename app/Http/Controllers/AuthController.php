<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return response()->json([
            'message' => 'Hello, Api'
        ], 200);
    }
}
