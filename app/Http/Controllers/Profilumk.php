<?php

namespace App\Http\Controllers;

use App\Models\Umk;
use App\Models\Legalitas;
use Illuminate\Http\Request;

class Profilumk extends Controller
{
    // Tampilkan seluruh data UMK
    public function index()
    {
        $data_umk = Umk::all();
        return view('DataUMK.DataUMK', compact('data_umk'));
    }

    // Tampilkan form tambah data
    public function create()
    {
        $legal = Legalitas::all(); // bisa disesuaikan
        return view('DataUMK.store', compact('legal'));
    }

    // Tampilkan detail UMK berdasarkan ID
    public function detailumk($id)
    {
        $data_umk = Umk::findOrFail($id);
        

        return view('DetailUmk.detailUmk', compact('data_umk'));
    }

    // Simpan data UMK baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_umkm' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
            'jumlah_tenaga_kerja' => 'required|integer|min:1',
            'volume_produksi_per_bulan' => 'required|numeric|min:0',
            'daftar_merk' => 'nullable|in:belum,sudah_mengajukan,sudah_terdaftar',
            'negara_tujuan_ekspor' => 'nullable|in:ya,tidak',
            'negara_tujuan' => 'required_if:negara_tujuan_ekspor,ya|string|nullable',
            'struktur_organisasi' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',

            // Legalitas
            'pirt' => 'nullable|string',
            'md' => 'nullable|string',
            'skp' => 'nullable|string',
            'nkv' => 'nullable|string',
            'psat' => 'nullable|string',
            'psah' => 'nullable|string',
            'izin_edar' => 'nullable|string',
            'sertifikat_halal' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $profil = Umk::create([
            'nama_umkm' => $request->nama_umkm,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'jumlah_tenaga_kerja' => $request->jumlah_tenaga_kerja,
            'volume_produksi_per_bulan' => $request->volume_produksi_per_bulan,
            'daftar_merk' => $request->daftar_merk,
            'negara_tujuan_ekspor' => $request->negara_tujuan_ekspor,
            'negara_tujuan' => $request->negara_tujuan,
        ]);

        Legalitas::create([
            'profil_umkm_id' => $profil->id,
            'nib' => $request->has('nib'),
            'halal' => $request->has('halal'),
            'izin' => $request->has('izin'),
            'pirt' => $request->pirt,
            'md' => $request->md,
            'skp' => $request->skp,
            'nkv' => $request->nkv,
            'psat' => $request->psat,
            'psah' => $request->psah,
            'izin_edar' => $request->izin_edar,
        ]);

        return redirect()->route('profil')->with('success', 'Data UMK berhasil disimpan.');
    }
}
