<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index(){
        return view('users.profile');
    }

    public function pesan(){
        return view('users.pesan');
    }

    public function produk(){
        return view('users.produk');
    }
}

