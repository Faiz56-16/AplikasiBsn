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
                                <input type="text" class="form-control" name="nama_umkm">
                            </div>
                            <div class="col-md-6 mb-3"> <!-- Farhat cinta guning -->
                                <label>No HP</label>
                                <input type="text" class="form-control" name="no_hp">
                            </div>
                            <div class="col-12 mb-3">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Legalistas Usaha</label>

                                <div class="col-md-6 mb-3">
                                    <br>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="nib" onchange="toggleField('nib')">
                                        <label class="form-check-label" for="nib">NIB</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="halal" onchange="toggleField('halal')">
                                        <label class="form-check-label" for="halal">Sertifikat Halal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="izin" onchange="toggleField('izin')">
                                        <label class="form-check-label" for="izin">Izin Edar</label>
                                    </div>

                                    <!-- Dynamic Field: NIB -->
                                    <div id="field-nib" class="mt-2" style="display: none;">
                                        <input type="text" name="pirt" class="form-control mb-1" placeholder="PIRT">
                                        <input type="text" name="md" class="form-control mb-1" placeholder="MD">
                                        <input type="text" name="skp" class="form-control mb-1" placeholder="SKP">
                                        <input type="text" name="nkv" class="form-control mb-1" placeholder="NKV">
                                        <input type="text" name="psat" class="form-control mb-1" placeholder="PSAT">
                                        <input type="text" name="psah" class="form-control mb-1" placeholder="PSAH">
                                    </div>

                                    <!-- Dynamic Field: Sertifikat Halal -->
                                    <div id="field-halal" class="mt-2" style="display: none;">
                                        <input type="file" name="" class="form-control">
                                    </div>

                                    <!-- Dynamic Field: Izin Edar -->
                                    <div id="field-izin" class="mt-2" style="display: none;">
                                        <input type="text" name="" class="form-control" placeholder="Masukkan Nomor Izin Edar">
                                    </div>
                                </div>
                                <!--Script Izin Edar-->
                                <script>
                                    function toggleField(type) {
                                        const checkbox = document.getElementById(type);
                                        const field = document.getElementById('field-' + type);
                                        field.style.display = checkbox.checked ? 'block' : 'none';
                                    }
                                </script>
                            </div>



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
                                <textarea class="form-control mb-2" name="" rows="4" placeholder="Tuliskan penjelasan atau deskripsi singkat..."></textarea>

                                <input type="file" class="form-control" name="struktur_organisasi">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Jumlah Tenaga Kerja</label>
                                <input type="number" class="form-control" name="jumlah_tenaga_kerja">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Jangkauan Distribusi & Pemasaran</label>
                                <textarea class="form-control mb-2" name="jangkauan_distribusi" rows="4" placeholder="Daerah pemasaran lokal,luar kota, ekspor..."></textarea>
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
                                    <input class="form-check-input" type="radio" name="negara_tujuan_ekspor" id="ekspor_ya" value="ya" onchange="toggleEkspor(true)">
                                    <label class="form-check-label" for="ekspor_ya">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="negara_tujuan_ekspor" id="ekspor_tidak" value="tidak" onchange="toggleEkspor(false)">
                                    <label class="form-check-label" for="ekspor_tidak">Tidak</label>
                                </div>

                                <!-- Input negara tujuan ekspor -->
                                <div id="negaraTujuan" class="mt-2" style="display: none;">
                                    <input type="text" class="form-control" name="negara_tujuan" placeholder="Sebutkan negara tujuan ekspor">
                                </div>
                            </div>
                            <script>
                                function toggleEkspor(isYes) {
                                    const field = document.getElementById('negaraTujuan');
                                    field.style.display = isYes ? 'block' : 'none';
                                }
                            </script>

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

                <a href="{{ route('profil') }}" class="btn btn-primary mt-3">Kembali</a>
                </form>
            </div>
    </div>
    </section>
</div>
</div>
@endsection