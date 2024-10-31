<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view("index");
    }

    public function keranjang(){
        return view("keranjang");
    }

    public function riwayat(){
        return view("riwayat");
    }

    public function about(){
        return view("about");
    }

    public function login(){
        return view("login");
    }
}
