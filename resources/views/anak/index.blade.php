@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Anak</h2>
    <a href="{{ route('anak.create') }}" class="btn btn-primary">Tambah Anak</a>
    <table class="table mt-3">
        <tr>
            <th>Nama</th>
            <th>NIK</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Umur Tahun</th>
            <th>Umur Bulan</th>
            <th>Jenis Kelamin</th>
            <th>Anak Ke</th>
        </tr>
        @foreach ($anaks as $anak)
        <tr>
            <td>{{ $anak->nama }}</td>
            <td>{{ $anak->NIK }}</td>
            <td>{{ $anak->tempat_lahir }}</td>
            <td>{{ $anak->tanggal_lahir }} </td>
            <td>{{ $anak->umur_tahun }} </td>
            <td>{{ $anak->umur_bulan }}</td>
            <td>{{ $anak->JK}}</td>
            <td>{{ $anak->anak_ke }}</td>
            <td>
                <a href="{{ route('anak.edit', $anak->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('anak.destroy', $anak->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
