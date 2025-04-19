@extends('layouts.app')

@section('title', 'Create Surat ')

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
            <h1>Orang Tua</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Orang Tua</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Orang Tua</h2>
            <div class="card">
                <form action="{{ route('surat.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-12 mb-3">
                        <label for="judul" class="form-label mt-3">Judul Surat</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
            
                    <div class="form-group col-md-12 mb-3">
                        <label for="file" class="form-label mt-3">File Surat (PDF)</label>
                        <input type="file" name="file" class="form-control" accept="application/pdf" required>
                    </div>
            
                    <div class="col-12">
                        <button type="submit" class="btn btn-success w-100 mb-5">Simpan</button>
                    </div>
                </form>
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

    <script>
        $(document).ready(function() {
         
            $('#anak').change(function() {
                var selectedOrangtua = $(this).find(':selected').data('orangtua');
                if (selectedOrangtua) {
                    $('#id_orang_tua').val(selectedOrangtua).trigger('change');
                } else {
                    $('#id_orang_tua').val('').trigger('change');
                }
            });
        });
    </script>
@endpush
