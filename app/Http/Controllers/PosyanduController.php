<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;

class PosyanduController extends Controller
{
    public function index(){
        return view('home', [
            "title" => "home",
            "posyandu" => Posyandu::latest()->filter(request(['search','provinsi']))->get(),
        ]);
    }

}
