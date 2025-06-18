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
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Nama UMKM</label>
                                <input type="text" class="form-control" value="UMKM Sari Rasa" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>No HP</label>
                                <input type="text" class="form-control" value="081234567890" readonly>
                            </div>
                            <div class="col-12 mb-3">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="2" readonly>Jl. Raya Cibadak No. 99, Sukabumi</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Daftar Merk</label>
                                <input type="text" class="form-control" value="Sari Rasa Food" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Struktur Organisasi</label>
                                <input type="text" class="form-control" value="Direktur - Produksi - QC - Distribusi" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Jumlah Tenaga Kerja</label>
                                <input type="number" class="form-control" value="12" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Jangkauan Distribusi</label>
                                <input type="text" class="form-control" value="Kabupaten Sukabumi & Sekitarnya" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Permodalan</label>
                                <input type="text" class="form-control" value="Dana Pribadi" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Volume Produksi per Bulan</label>
                                <input type="text" class="form-control" value="500 Kg" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Berpotensi Ekspor</label>
                                <input type="text" class="form-control" value="Ya" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Negara Tujuan Ekspor</label>
                                <input type="text" class="form-control" value="Malaysia, Singapura" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>SNI Terkait</label>
                                <input type="text" class="form-control" value="SNI 01-3544-2004" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Peraturan Terkait</label>
                                <input type="text" class="form-control" value="Peraturan BPOM RI No. 11 Tahun 2019" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Sertifikasi Lain</label>
                                <input type="text" class="form-control" value="Sertifikat Halal, PIRT" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Skema Sertifikasi</label>
                                <input type="text" class="form-control" value="SNI Pangan Olahan" readonly>
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
