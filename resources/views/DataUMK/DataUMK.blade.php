@extends('Layout.Layout')

@section('title', 'Profil UMKM')

@section('content')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Profil UMKM</h3>
                    <p class="text-subtitle text-muted">Masukkan Data Profil UMKM Anda</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil UMKM</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Dummy Data UMKM</h4>
                    <br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="">
                        Tambah Data
                    </button></br>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Nama UMKM</label>
                                <input type="text" class="form-control" name="" >
                            </div>
                            <div class="col-md-6 mb-3"> <!-- Farhat cinta guning -->
                                <label>No HP</label>
                                <input type="text" class="form-control" name= >
                            </div>
                            <div class="col-12 mb-3">
                                <label>Alamat</label>
                               <input type="text" class="form-control" name=>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Legalistas Usaha</label>
                                <input type="text" class="form-control" name= >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Izin Edar</label>
                                <input type="text" class="form-control" name="izin_edar">
                            </div>

                           <div class="col-md-6 mb-3">
                                <label>Izin Edar</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="dokumen[]" value="NIB" id="nib">
                                    <label class="form-check-label" for="nib">NIB</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="dokumen[]" value="Sertifikat Halal" id="halal">
                                    <label class="form-check-label" for="halal">Sertifikat Halal</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="dokumen[]" value="Izin Edar" id="izin">
                                    <label class="form-check-label" for="izin">Izin Edar</label>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Tanda Daftar Merk</label>
                                <input type="number" class="form-control" name= >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Struktur Organisasi</label>
                                <input type="text" class="form-control" name= >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Jumlah Tenaga Kerja</label>
                                <input type="text" class="form-control" name= >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Jangkauan Distribusi & Pemasaran</label>
                                <input type="text" class="form-control" name= >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Permodalan</label>
                                <input type="text" class="form-control" name= >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Volume Produksi/Bulan</label>
                                <input type="text" class="form-control" name= >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Berpotensi Ekspor? Ke Negara?</label>
                                <input type="text" class="form-control" name= >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>SNI Terkait</label>
                                <input type="text" class="form-control" name= >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Peraturan Terkait</label>
                                <input type="text" class="form-control" name= >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Sertifikat Lain yang Dimiliki</label>
                                <input type="text" class="form-control" name= >
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary mt-3">Kembali</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
