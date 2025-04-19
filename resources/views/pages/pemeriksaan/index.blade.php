@extends('layouts.app')

@section('title', 'Pemeriksaan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pemeriksaan</h1>
                <div class="section-header-button">
                    <a href="{{ route('pemeriksaan.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Pemeriksaan</a></div>
                    <div class="breadcrumb-item">All Pemeriksaan</div>
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
                                    {{-- <form method="GET" action="{{ route('anak.index') }}">
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
                                            <th>No</th>
                <th>Nama Anak</th>
                <th>Nama Orang Tua</th>
                <th>Tanggal</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Lingkar Kepala</th>
                <th>Vitamin A</th>
                <th>Imunisasi</th>
                <th>Catatan</th>
                {{-- <th>Aksi</th> --}}
                                        </tr>
                                        @foreach($pemeriksaan as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->anak->nama }}</td>
                <td>{{ $item->orangTua->nama }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->berat_badan }} kg</td>
                <td>{{ $item->tinggi_badan }} cm</td>
                <td>{{ $item->lingkar_kepala }} cm</td>
                <td>{{ $item->vitamin_A  }}</td>
                <td>
                    BCG: {{ $item->imunisasi_BCG  }}<br>
                     HB1: {{ $item->imunisasi_DPT_HB1  }}<br>
                     HB2: {{ $item->imunisasi_DPT_HB2 }}<br>
                     HB3: {{ $item->imunisasi_DPT_HB3  }}
                </td>
                <td>{{ $item->catatan }}</td>
                {{-- <td>
                    <a href="{{ route('pemeriksaan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pemeriksaan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td> --}}
            </tr>
            @endforeach


                                    </table>
                                </div>
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
