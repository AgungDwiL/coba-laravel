<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('login.register', [
            'title' => 'Login'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string',
            'username' => 'required|min:3|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|string'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successful, please login!');
    }
}
