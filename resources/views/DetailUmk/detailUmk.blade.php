@extends('Layout.Layout')

@section('title', 'Profil UMKM')

@section('content')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6">
                    <h3>Profil UMKM</h3>
                    <p class="text-subtitle text-muted">Data lengkap UMKM</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Nama UMKM</label>
                <p class="form-control-plaintext">{{ $data_umk->nama_umkm }}</p>
            </div>
            <div class="col-md-6 mb-3">
                <label>No HP</label>
                <p class="form-control-plaintext">{{ $data_umk->no_hp }}</p>
            </div>

            <div class="col-12 mb-3">
                <label>Alamat</label>
                <p class="form-control-plaintext">{{ $data_umk->alamat }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <label>Legalitas Usaha</label>
                <ul>
                    @if($data_umk->nib) <li>NIB</li> @endif
                    @if($data_umk->halal) <li>Sertifikat Halal</li> @endif
                    @if($data_umk->izin_edar) <li>Izin Edar: {{ $data_umk->izin_edar }}</li> @endif
                </ul>
                <p>PIRT: {{ $data_umk->pirt ?? '-' }}</p>
                <p>MD: {{ $data_umk->md ?? '-' }}</p>
                <p>SKP: {{ $data_umk->skp ?? '-' }}</p>
                <p>NKV: {{ $data_umk->nkv ?? '-' }}</p>
                <p>PSAT: {{ $data_umk->psat ?? '-' }}</p>
                <p>PSAH: {{ $data_umk->psah ?? '-' }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <label>Tanda Daftar Merk</label>
                <p class="form-control-plaintext">{{ ucfirst(str_replace('_', ' ', $data_umk->daftar_merk)) }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <label>Struktur Organisasi</label>
                <p class="form-control-plaintext">{{ $data_umk->struktur_keterangan }}</p>
                @if($data_umk->struktur_organisasi)
                    <img src="{{ asset('storage/'.$data_umk->struktur_organisasi) }}" class="img-fluid mt-2" alt="Struktur Organisasi">
                @endif
            </div>

            <div class="col-md-6 mb-3">
                <label>Jumlah Tenaga Kerja</label>
                <p class="form-control-plaintext">{{ $data_umk->jumlah_tenaga_kerja }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <label>Jangkauan Distribusi & Pemasaran</label>
                <p class="form-control-plaintext">{{ $data_umk->jangkauan_distribusi }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <label>Permodalan</label>
                <p class="form-control-plaintext">{{ $data_umk->permodalan }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <label>Volume Produksi/Bulan</label>
                <p class="form-control-plaintext">{{ $data_umk->volume_produksi_per_bulan }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <label>Ekspor</label>
                <p class="form-control-plaintext">
                    {{ $data_umk->negara_tujuan_ekspor === 'ya' ? 'Ya' : 'Tidak' }}
                    @if($data_umk->negara_tujuan_ekspor === 'ya')
                        <br>Negara: {{ $data_umk->negara_tujuan }}
                    @endif
                </p>
            </div>

            <div class="col-md-6 mb-3">
                <label>SNI Terkait</label>
                <p class="form-control-plaintext">{{ $data_umk->sni_terkait }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <label>Peraturan Terkait</label>
                <p class="form-control-plaintext">{{ $data_umk->peraturan_terkait }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <label>Sertifikat Lain yang Dimiliki</label>
                <p class="form-control-plaintext">{{ $data_umk->sertifikasi_lain }}</p>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('profil') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection
