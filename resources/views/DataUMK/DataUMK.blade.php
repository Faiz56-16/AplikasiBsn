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
                    <h4 class="card-title">Form Data UMKM</h4>
                     <a href="{{ route('profil.tambah') }}" class="btn btn-primary btn-sm text-white">Tambah</a>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label>Nama UMKM</label>
                                <input type="text" class="form-control" name="nama_umkm">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>No HP</label>
                                <input type="text" class="form-control" name="no_hp">
                            </div>

                            <!-- Kolom Alamat dan Tombol di Satu Baris -->
                            <div class="col-md-5 mb-3">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="col-md-1 mb-3 d-flex align-items-end">
                               <a href="" class="btn btn-primary btn-sm text-white w-100" style="height: 38px;">Detail</a>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection