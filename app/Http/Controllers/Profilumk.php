<?php

namespace App\Http\Controllers;

use App\Models\Umk;
use Illuminate\Http\Request;
use App\Models\Legalitas;

class Profilumk extends Controller
{
    public function index()
    {
        $data_umk = Umk::all();
        return view('DataUMK.DataUMK');
    }

    public function create()
    {
        $data_umk = Umk::all();
        $legalitas = Legalitas::all();
        return view('DataUMK.store');
    }
    public function store(Request $request)
    {
        $validatedu = $request->validate([
            'nama_umkm' => 'required|string|min:3',
            'no_hp' => 'required|regex:/^08[0-9]{8,12}$/',
            'alamat' => 'required|string|max:255',
        ]);
    }
}
