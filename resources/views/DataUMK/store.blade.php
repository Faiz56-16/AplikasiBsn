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

        <form action="{{ route('profil.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Nama UMKM</label>
                    <input type="text" class="form-control" name="nama_umkm" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>No HP</label>
                    <input type="text" class="form-control" name="no_hp" required>
                </div>
                <div class="col-12 mb-3">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" required>
                </div>

                {{-- LEGALITAS --}}
                <div class="col-md-6 mb-3">
                    <label>Legalitas Usaha</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="nib" id="nib" onchange="toggleField('nib')">
                        <label class="form-check-label" for="nib">NIB</label>
                    </div>
                    <div id="field-nib" class="mt-2" style="display: none;">
                        <input type="text" name="pirt" class="form-control mb-1" placeholder="PIRT">
                        <input type="text" name="md" class="form-control mb-1" placeholder="MD">
                        <input type="text" name="skp" class="form-control mb-1" placeholder="SKP">
                        <input type="text" name="nkv" class="form-control mb-1" placeholder="NKV">
                        <input type="text" name="psat" class="form-control mb-1" placeholder="PSAT">
                        <input type="text" name="psah" class="form-control mb-1" placeholder="PSAH">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="halal" id="halal" onchange="toggleField('halal')">
                        <label class="form-check-label" for="halal">Sertifikat Halal</label>
                    </div>
                    <div id="field-halal" class="mt-2" style="display: none;">
                        <input type="file" name="sertifikat_halal" class="form-control">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="izin" id="izin" onchange="toggleField('izin')">
                        <label class="form-check-label" for="izin">Izin Edar</label>
                    </div>
                    <div id="field-izin" class="mt-2" style="display: none;">
                        <input type="text" name="izin_edar" class="form-control" placeholder="Masukkan Nomor Izin Edar">
                    </div>
                </div>

                {{-- LAIN-LAIN --}}
                <div class="col-md-6 mb-3">
                    <label>Tanda Daftar Merk</label>
                    <select class="form-control" name="daftar_merk">
                        <option value="">-- Pilih Status --</option>
                        <option value="belum">Belum</option>
                        <option value="sudah_mengajukan">Sudah Mengajukan</option>
                        <option value="sudah_terdaftar">Sudah Terdaftar</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Struktur Organisasi</label>
                    <textarea class="form-control mb-2" name="struktur_keterangan" rows="4" placeholder="Tuliskan penjelasan..."></textarea>
                    <input type="file" class="form-control" name="struktur_organisasi">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Jumlah Tenaga Kerja</label>
                    <input type="number" class="form-control" name="jumlah_tenaga_kerja" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Jangkauan Distribusi & Pemasaran</label>
                    <textarea class="form-control mb-2" name="jangkauan_distribusi" rows="4"></textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Permodalan</label>
                    <textarea class="form-control mb-2" name="permodalan" rows="4"></textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Volume Produksi/Bulan</label>
                    <input type="number" class="form-control" name="volume_produksi_per_bulan">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Berpotensi Ekspor? Ke Negara?</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="negara_tujuan_ekspor" value="ya" onchange="toggleEkspor(true)">
                        <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="negara_tujuan_ekspor" value="tidak" onchange="toggleEkspor(false)">
                        <label class="form-check-label">Tidak</label>
                    </div>
                    <div id="negaraTujuan" class="mt-2" style="display: none;">
                        <input type="text" class="form-control" name="negara_tujuan" placeholder="Negara tujuan ekspor">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label>SNI Terkait</label>
                    <input type="text" class="form-control" name="sni_terkait">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Peraturan Terkait</label>
                    <textarea class="form-control mb-2" name="peraturan_terkait" rows="4"></textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Sertifikat Lain yang Dimiliki</label>
                    <textarea class="form-control mb-2" name="sertifikasi_lain" rows="4"></textarea>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('profil') }}" class="btn btn-primary">Kembali</a>
            </div>
        </form>

        {{-- Script --}}
        <script>
            function toggleField(type) {
                const checkbox = document.getElementById(type);
                const field = document.getElementById('field-' + type);
                field.style.display = checkbox.checked ? 'block' : 'none';
            }

            function toggleEkspor(isYes) {
                const field = document.getElementById('negaraTujuan');
                field.style.display = isYes ? 'block' : 'none';
            }
        </script>


    </div>
    </section>
</div>
</div>
@endsection