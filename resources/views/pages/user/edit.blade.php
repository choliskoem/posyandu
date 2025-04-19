@extends('layouts.app')

@section('title', 'Edit User')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Anak</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Anak</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Anak</h2>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('anak.update', $anak->id_anak) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Nama Orang Tua</label>
                                <select name="id_orang_tua" class="form-control" required>
                                    @foreach($orangtua as $parent)
                                        <option value="{{ $parent->id }}" {{ $anak->id_orang_tua == $parent->id ? 'selected' : '' }}>
                                            {{ $parent->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nama Anak</label>
                                <input type="text" name="nama" class="form-control" value="{{ $anak->nama }}" required>
                            </div>

                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" class="form-control" maxlength="16" value="{{ $anak->nik }}" required>
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" value="{{ $anak->tempat_lahir }}" required>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" value="{{ $anak->tanggal_lahir }}" required>
                            </div>

                            <div class="form-group">
                                <label>Umur Tahun</label>
                                <input type="number" name="umur_tahun" class="form-control" value="{{ $anak->umur_tahun }}">
                            </div>

                            <div class="form-group">
                                <label>Umur Bulan</label>
                                <input type="number" name="umur_bulan" class="form-control" value="{{ $anak->umur_bulan }}">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="JK" class="form-control">
                                    <option value="L" {{ $anak->JK == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ $anak->JK == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Anak Ke</label>
                                <input type="number" name="anak_ke" class="form-control" value="{{ $anak->anak_ke }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="{{ route('anak.index') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
