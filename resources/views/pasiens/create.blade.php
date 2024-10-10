@extends('layouts.backend.app')
<title>Tambah Daftar Sakit</title>

@section('content')
<div class="container mt-5">
    <h3>Tambah Pasien</h3>
    <form action="{{ route('pasiens.store') }}" method="POST">
        @csrf <!-- Token CSRF untuk keamanan form -->
        <div class="form-group">
            <label>NIS</label>
            <input type="text" name="nis" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <select name="kelas" class="form-control" required>
                <option value="" disabled selected>Pilih Kelas</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jurusan</label>
            <select name="jurusan" class="form-control" required>
                <option value="" disabled selected>Pilih Jurusan</option>
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
                <option value="AKL">AKL</option>
                <option value="SK">SK</option>
                <option value="TKR">TKR</option>
                <option value="MP">MP</option>
                <option value="DPIB">DPIB</option>
            </select>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="" disabled selected>Pilih Status</option>
                <option value="Pulang">Pulang</option>
                <option value="Balik ke kelas">Balik ke kelas</option>
                <option value="Puskesmas/Rumah sakit">Ke Puskesmas/Rumah Sakit</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
