<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeC extends Controller
{
    public function index(){
        return 'Ini Halaman Home';
    }

    public function about(){
        $user = ['name' => 'Wananda', 'role' => 'admin'];
        return view('pages.about', $user);
    }

    public function contact(){
        $data = [
            "person" => ["Jaehyun", "Jeno", "Jisung", "Jaemin", "Jungwoo"]
        ];
        return view('pages.contact', $data);
    }
}
