@extends('layouts.app')

@section('title', 'Anak')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Jadwal</h1>
                <div class="section-header-button">
                    <a href="{{ route('jadwal.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Jadwal</a></div>
                    <div class="breadcrumb-item">All Jadwal</div>
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
                                    <form method="GET" action="{{ route('anak.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>#</th>
                                           <th>tanggal</th>
                                           <th>bulan</th>
                                           <th>tahun</th>
                                           <th>Aktif</th>
                                            <th>Aksi</th>
                                        </tr>
                                        @foreach($data as $key => $item)                                            <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->bulan }}</td>
                                            <td>{{ $item->tahun }}</td>
                                            <td>{{ $item->aktif }}</td>
                                           
                                            <td>
                                                <form action="{{ route('jadwal.updateAktif', $item->id_jadwal) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        Tandai Aktif
                                                    </button>
                                                </form>
                                                <form action="{{ route('jadwal.updateNonAktif', $item->id_jadwal) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger
                                                     btn-sm">
                                                        Tandai Non Aktif
                                                    </button>
                                                </form>
                                            </td>
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
