<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function register()
    {
        return view('auth/register');
    }
    public function store(Request $request)
    {

        return "User Register";
        // $user = User::create([

        // ]);
    }
}
