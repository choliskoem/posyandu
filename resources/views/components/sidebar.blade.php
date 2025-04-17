<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Wapili Enak</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">WE</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>User Management</span></a>
                <ul class="dropdown-menu">

                        <li>
                            <a class="nav-link" href="{{ route('orangtua.index') }}">Orangtua</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('anak.index') }}">Anak</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('user.index') }}">User</a>
                        </li>
                        
                        
                </ul>
            </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Pemeriksaan Management</span></a>
                <ul class="dropdown-menu">

                    <li>
                        <a class="nav-link" href="{{ route('jadwal.index') }}">Jadwal</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('antrian.index') }}">Antrian</a>
                    </li>

                    <li>
                        <a class="nav-link" href="{{ route('pemeriksaan.index') }}">Pemeriksaan</a>
                    </li>
                </ul>
            </li>


            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Orangtua</span></a>
                <ul class="dropdown-menu">

                        <li>
                            <a class="nav-link" href="{{ route('orangtua.index') }}">Orangtua</a>
                        </li>
                </ul>
            </li> --}}

            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Jadwal</span></a>
                <ul class="dropdown-menu">

                        <li>
                            <a class="nav-link" href="{{ route('jadwal.index') }}">Jadwal</a>
                        </li>
                </ul>
            </li> --}}

{{--             
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Antrian</span></a>
                <ul class="dropdown-menu">

                        <li>
                            <a class="nav-link" href="{{ route('antrian.index') }}">Antrian</a>
                        </li>
                </ul>
            </li> --}}
            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Anak</span></a>
                <ul class="dropdown-menu">

                        <li>
                            <a class="nav-link" href="{{ route('anak.index') }}">Anak</a>
                        </li>






                </ul>
            </li> --}}

            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Pemeriksaan</span></a>
                <ul class="dropdown-menu">

                        <li>
                            <a class="nav-link" href="{{ route('pemeriksaan.index') }}">Pemeriksaan</a>
                        </li>






                </ul>
            </li> --}}

            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>User</span></a>
                <ul class="dropdown-menu">

                        <li>
                            <a class="nav-link" href="{{ route('user.index') }}">User</a>
                        </li>






                </ul>
            </li> --}}
            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('kecamatan.index') }}">Kecamatan & Keluarahan</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('seksi.index') }}">Seksi & Pelayanan</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('penandatanganan.index') }}">Penandatangan</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">User</a>
                    </li>

                    <li>
                        <a class="nav-link" href="">Import</a>
                    </li>




                </ul>
            </li> --}}
    </aside>
</div>
