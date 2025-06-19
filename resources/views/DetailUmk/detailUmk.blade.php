@extends('Layout.Layout')

@section('title', 'Profil UMKM')

@section('content')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6">
                    <h3>Profil UMKM</h3>
                    <p class="text-subtitle text-muted">Formulir Data UMKM (Read-Only)</p>
                </div>
            </div>
        </div>

        <form>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Nama UMKM</label>
                    <input type="text" class="form-control" value="{{ $data_umk->nama_umkm }}" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label>No HP</label>
                    <input type="text" class="form-control" value="{{ $data_umk->no_hp }}" readonly>
                </div>

                <div class="col-12 mb-3">
                    <label>Alamat</label>
                    <input type="text" class="form-control" value="{{ $data_umk->alamat }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Legalitas Usaha</label>
                    <ul class="mb-2">
                        @if($data_umk->nib) <li>NIB</li> @endif
                        @if($data_umk->halal) <li>Sertifikat Halal</li> @endif
                        @if($data_umk->izin_edar) <li>Izin Edar: {{ $data_umk->izin_edar }}</li> @endif
                    </ul>
                    <input type="text" class="form-control mb-1" value="PIRT: {{ $data_umk->pirt ?? '-' }}" readonly>
                    <input type="text" class="form-control mb-1" value="MD: {{ $data_umk->md ?? '-' }}" readonly>
                    <input type="text" class="form-control mb-1" value="SKP: {{ $data_umk->skp ?? '-' }}" readonly>
                    <input type="text" class="form-control mb-1" value="NKV: {{ $data_umk->nkv ?? '-' }}" readonly>
                    <input type="text" class="form-control mb-1" value="PSAT: {{ $data_umk->psat ?? '-' }}" readonly>
                    <input type="text" class="form-control mb-1" value="PSAH: {{ $data_umk->psah ?? '-' }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tanda Daftar Merk</label>
                    <input type="text" class="form-control" value="{{ ucfirst(str_replace('_', ' ', $data_umk->daftar_merk)) }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Struktur Organisasi</label>
                    <textarea class="form-control mb-2" readonly>{{ $data_umk->struktur_keterangan }}</textarea>
                    @if($data_umk->struktur_organisasi)
                        <img src="{{ asset('storage/'.$data_umk->struktur_organisasi) }}" class="img-fluid mt-2" alt="Struktur Organisasi">
                    @endif
                </div>

                <div class="col-md-6 mb-3">
                    <label>Jumlah Tenaga Kerja</label>
                    <input type="number" class="form-control" value="{{ $data_umk->jumlah_tenaga_kerja }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Jangkauan Distribusi & Pemasaran</label>
                    <textarea class="form-control" rows="4" readonly>{{ $data_umk->jangkauan_distribusi }}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Permodalan</label>
                    <textarea class="form-control" rows="4" readonly>{{ $data_umk->permodalan }}</textarea>
                </div>
                    <label>Ekspor</label>
                    <input type="text" class="form-control mb-2" value="{{ $data_umk->negara_tujuan_ekspor === 'ya' ? 'Ya' : 'Tidak' }}" readonly>
                    @if($data_umk->negara_tujuan_ekspor === 'ya')
                        <input type="text" class="form-control" value="Negara: {{ $data_umk->negara_tujuan }}" readonly>
                    @endif
                </div>

                <div class="col-md-6 mb-3">
                    <label>SNI Terkait</label>
                    <input type="text" class="form-control" value="{{ $data_umk->sni_terkait }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Peraturan Terkait</label>
                    <textarea class="form-control" rows="4" readonly>{{ $data_umk->peraturan_terkait }}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Sertifikat Lain yang Dimiliki</label>
                    <textarea class="form-control" rows="4" readonly>{{ $data_umk->sertifikasi_lain }}</textarea>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('profil') }}" class="btn btn-primary">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection

