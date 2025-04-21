<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Trang chủ
    public function homeDefault() {
        return view('home');
    }
}
