<?php

namespace App\Http\Controllers;

use App\Models\Umk;
use Illuminate\Http\Request;

class Profilumk extends Controller
{
    public function index(){

        return view('DataUMK.DataUMK');

    }

    public function store(){

        return view('DataUMK.store');
    }


}
