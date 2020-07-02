<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request) {
        $nama_depan = $request["firstName"];
        $nama_belakang = $request["lastName"];
        return view('welcome')->with(['nama_depan' => $nama_depan, 'nama_belakang' => $nama_belakang]);
    }
}
