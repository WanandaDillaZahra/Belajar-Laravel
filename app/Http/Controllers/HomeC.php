<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataeskulM;
use App\Models\datapesertadidikM;
use App\Models\dataprestasiM;

class HomeC extends Controller
{
    public function index(){
        $user = ['name' => 'Wananda', 'role' => 'teller'];
        return view('pages.home', $user); 
    }

    public function tentangsekolah(){
        $user = ['name' => 'Nanda', 'role' => 'admin'];
        return view('pages.tentang', $user);
    }

    public function datapesertadidik(){
        $data = datapesertadidikM::all();
        return view('pages.datapesertadidik', ['data' => $data]);
    }

    public function dataeskul(){
        $data = dataeskulM::all();
        return view('pages.dataeskul', ['data' => $data]);
    }

    public function dataprestasi(){
        $data = dataprestasiM::all();
        return view('pages.dataprestasi', ['data' => $data]);
    }
}
