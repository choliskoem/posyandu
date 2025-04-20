@extends('layouts.app')

@section('title', 'Create Jadwal ')

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
                        <form action="{{ route('jadwal.store') }}" method="POST">
                            @csrf
                    
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="number" name="tanggal" class="form-control" placeholder="Masukkan tanggal (1-31)" value="{{ old('tanggal') }}">
                            </div>
                    
                            <div class="mb-3">
                                <label for="bulan" class="form-label">Bulan</label>
                                <input type="number" name="bulan" class="form-control" placeholder="Masukkan bulan (1-12)" value="{{ old('bulan') }}">
                            </div>
                    
                            <div class="mb-3">
                                <label for="tahun" class="form-label">Tahun</label>
                                <input type="number" name="tahun" class="form-control" placeholder="Masukkan tahun (misal 2025)" value="{{ old('tahun') }}">
                            </div>
                    
                            <div class="mb-3">
                                <label for="aktif" class="form-label">Status Aktif</label>
                                <select name="aktif" class="form-select">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="yes" {{ old('aktif') == '1' ? 'selected' : '' }}>Aktif</option>
                                    <option value="no" {{ old('aktif') == '0' ? 'selected' : '' }}>Tidak Aktif</option>
                                </select>
                            </div>
                    
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Kembali</a>
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
