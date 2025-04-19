@extends('layouts.app')

@section('title', 'Create Pemeriksaan ')

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
                <h1>Pemeriksaan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Pemeriksaan</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Pemeriksaan</h2>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pemeriksaan.store') }}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-md-6">
                                <label for="id_anak" class="form-label">Nama Anak</label>
                                <select name="anak" id="anak" class="form-select select2" required>
                                    <option value="">Pilih Anak</option>
                                    @foreach($anak as $item)
                                        <option value="{{ $item->id_anak }}" data-orangtua="{{ $item->id_orang_tua }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="id_orang_tua" class="form-label" >Nama Orang Tua</label>
                                <select name="id_orang_tua" id="id_orang_tua" class="form-select select2" required >
                                    <option value="">Pilih Orang Tua</option>
                                    @foreach($orang_tua as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="tanggal" class="form-label">Tanggal Pemeriksaan</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="berat_badan" class="form-label">Berat Badan (kg)</label>
                                <input type="number" step="0.1" name="berat_badan" id="berat_badan" class="form-control" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="tinggi_badan" class="form-label">Tinggi Badan (cm)</label>
                                <input type="number" step="0.1" name="tinggi_badan" id="tinggi_badan" class="form-control" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="lingkar_kepala" class="form-label">Lingkar Kepala (cm)</label>
                                <input type="number" step="0.1" name="lingkar_kepala" id="lingkar_kepala" class="form-control" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="form-label">Vitamin A</label>
                                <select name="vitamin_A" class="form-select select2" required>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="form-label">Imunisasi</label>
                                @php
                                    $imunisasiList = ['BCG', 'DPT_HB1', 'DPT_HB2', 'DPT_HB3'];
                                @endphp
                                @foreach($imunisasiList as $imunisasi)
                                    <input type="hidden" name="imunisasi_{{ $imunisasi }}" value="Tidak">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="imunisasi_{{ $imunisasi }}" id="imunisasi_{{ $imunisasi }}" value="Ya">
                                        <label class="form-check-label" for="imunisasi_{{ $imunisasi }}">{{ str_replace('_', ' ', $imunisasi) }}</label>
                                    </div>
                                @endforeach
                            </div>
                            
                            {{-- <div class="col-12 mb-3">
                                <label for="catatan" class="form-label ">Catatan</label>
                                <textarea name="catatan" id="catatan" class="form-control" rows="3"></textarea>
                            </div> --}}
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-success w-100">Simpan</button>
                            </div>
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
