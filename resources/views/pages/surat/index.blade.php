@extends('layouts.app')

@section('title', 'Surat')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Surat</h1>
            <div class="section-header-button">
                <a href="{{ route('surat.upload') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Surat</a></div>
                <div class="breadcrumb-item">All Surat</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                {{-- <div class="col-12">
                    @include('layouts.alert')
                </div> --}}

            </div>
            {{-- <h2 class="section-title">Orang Tua</h2>
            <p class="section-lead">
                You can manage all Orang Tua, such as editing, deleting and more.
            </p> --}}
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Posts</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-left">
                                <select class="form-control selectric">
                                    <option>Action For Selected</option>
                                    <option>Move to Draft</option>
                                    <option>Move to Pending</option>
                                    <option>Delete Pemanently</option>
                                </select>
                            </div>
                            <div class="float-right">
                                {{-- <form method="GET" action="{{ route('orangtua.index') }}">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="name">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form> --}}
                            </div>

                            <div class="clearfix mb-3"></div>

                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <tr>
                                        <th>Judul</th>
                                        <th>File</th>
                                        {{-- <th>Waktu Upload</th> --}}
                                        <th>Aksi</th>
                                    </tr>
                                  
                            @foreach ($surats as $surat)
                            <tr>
                                <td>{{ $surat->judul }}</td>
                                <td>{{ $surat->file }}</td>
                                {{-- <td>{{ $surat->created_at->format('d M Y H:i') }}</td> --}}
                                <td>
                                    <a href="{{ asset('storage/surat/' . $surat->file) }}" class="btn btn-primary btn-sm" target="_blank">Lihat</a>
                                    <a href="{{ asset('storage/surat/' . $surat->file) }}" download class="btn btn-success btn-sm">Download</a>
                                </td>
                            </tr>
                        @endforeach


                                </table>
                            </div>
                            {{-- <div class="float-right">
                                {{ $Orang Tua->withQueryString()->links() }}
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
   
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
