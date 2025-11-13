<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class AuthController extends Controller
{
    public function loginIndex() {
        return view('auth.login');
    }

    public function registerIndex() {
        return view('auth.register');
    }
}
