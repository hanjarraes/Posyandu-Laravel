<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Posyandu;
use App\Models\Provinsi;

class PosyanduController extends Controller
{
    public function index(){
        if(request(['search','provinsi'])){
            $trigger = true;
        }else {
            $trigger = false;
        }
        return view('home', [
            "title" => "home",
            "posyandu" => Posyandu::latest()->filter(request(['search','provinsi']))->get(),
            "provinsiData" => Provinsi::latest()->get(),
            "kabupatenData" => Kabupaten::latest()->get(),
            "kecamatanData" => Kecamatan::latest()->get(),
            "trigger" => $trigger
        ]);
    }

}
