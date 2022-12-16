<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Posyandu;
use App\Models\Provinsi;

class PosyanduController extends Controller
{
    public function index()
    {
        if (request(['search', 'provinsi'])) {
            $trigger = true;
        } else {
            $trigger = false;
        }
        return view('home', [
            "title" => "home",
            "posyandu" => Posyandu::filter(request(['search', 'provinsi', 'kabupaten', 'kecamatan']))->get(),
            "provinsiData" => Provinsi::latest()->get(),
            "kabupatenData" => Kabupaten::latest()->get(),
            "kecamatanData" => Kecamatan::latest()->get(),
            "trigger" => $trigger
        ]);
    }

    public function summary()
    {
        return view('posyanduSummary', [
            "title" => "posyanduSummary",
            "posyandu" => Posyandu::latest()->filter(request(['search', 'provinsi']))->paginate(5)->withQueryString(),
            "provinsiData" => Provinsi::latest()->get(),
            "kabupatenData" => Kabupaten::latest()->get(),
            "kecamatanData" => Kecamatan::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('createSummary', [
            "title" => "Create Posyandu",
            "provinsiData" => Provinsi::latest()->get(),
            "kabupatenData" => Kabupaten::latest()->get(),
            "kecamatanData" => Kecamatan::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_provinsi' => ['required'],
            'id_kabupaten' => ['required'],
            'id_kecamatan' => ['required'],
            'nama_posyandu' => ['required', 'max:255'],
            'email' => ['required', 'email:dns'],
            'no_telp' => ['required', 'max:14'],
            'no' => ['required', 'max:14'],
            'kader' => ['required', 'max:255'],
            'alamat_lengkap' => ['required'],
            'img' => ['required'],
            'jam_operasi' => ['required'],
            'map' => ['required'],
            'keterangan' => ['required'],
        ]);
        $validatedData['id_user'] = auth()->user()->id;
        Posyandu::create($validatedData);
        return redirect('/posyanduSummary')->with('success', 'Data Berhasil Ditambah!!');
    }
}
