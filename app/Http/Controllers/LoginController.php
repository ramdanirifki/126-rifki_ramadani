<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class LoginController extends Controller {
    public function handleLogin(Request $request) {
        $dummy_cashier = [
            ['name' => 'Ahmad Rojali', 'password' => 'password1', 'status' => 'Cashier 1'],
            ['name' => 'Lukman Rifaldi', 'password' => 'password2', 'status' => 'Cashier 2'],
            ['name' => 'Rafli Simanjuntak', 'password' => 'password3', 'status' => 'Cashier 3'],
        ];
        
        $username = $request->input('name');
        $password = $request->input('password');

        foreach ($dummy_cashier as $cashier) {
            if ($cashier['name'] === $username && $cashier['password'] === $password) {
                Session::put('username', $username);
                Session::put('status', $cashier['status']);
                return view('pages.main-page');
            } 
        }

        return back()->withErrors(['message' => 'Data yang anda masukkan salah']);
    }
    public function mainPage() {
        return view('pages.main-page');
    }
}
