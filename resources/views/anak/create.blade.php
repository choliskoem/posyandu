@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Anak</h2>
    <form action="{{ route('anak.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Anak</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="nama_ibu" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Umur Tahun</label>
            <input type="number" name="umur_tahun" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Umur Bulan</label>
            <input type="number" name="umur_bulan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Anak Ke</label>
            <input type="number" name="anak_ke" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
