@extends('layouts.app')

@section('title', 'Antrian')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Antrian</h1>
                {{-- <div class="section-header-button">
                    <a href="{{ route('Antrian.create') }}" class="btn btn-primary">Add New</a>
                </div> --}}
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Antrian</a></div>
                    <div class="breadcrumb-item">All Antrian</div>
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
                                    <form method="GET" action="{{ route('antrian.index') }}">
                                        <div class="input-group mb-3">
                                            <select name="id_jadwal" class="form-control selectric">
                                                <option value="">Pilih Jadwal</option>
                                                @foreach($jadwals as $jadwal)
                                                    <option value="{{ $jadwal->id_jadwal }}" {{ request('id_jadwal') == $jadwal->id_jadwal ? 'selected' : '' }}>
                                                        {{ $jadwal->tanggal }} / {{ $jadwal->bulan }} / {{ $jadwal->tahun }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fas fa-filter"></i> Filter
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Anak</th>
                                            <th>Nomor Antrian</th>
                                            <th>Kehadiran</th>
                                           
                                            <th>Aksi</th>
                                        </tr>
                                        @foreach($data as $key => $item)                                            <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->nomor_antrian }}</td>
                                            <td>{{ $item->hadir }}</td>
                                            {{-- <td>{{ $item->tanggal_lahir }}</td>
                                            <td>{{ $item->JK == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                            <td>{{ $item->anak_ke }}</td>
                                            <td>{{ $item->orangtua->nama }}</td> --}}
                                            <td>
                                                <form action="{{ route('antrian.updateHadir', $item->id_antrian) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        Tandai Hadir
                                                    </button>
                                                </form>
                                                {{-- <a href="{{ route('anak.edit', $item->id_anak) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('anak.destroy', $item->id_anak) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                                </form> --}}
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
