<?php

namespace App\Http\Controllers;

use App\Models\Umk;
use Illuminate\Http\Request;

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


}
