<nav class="sidebar sidebar-offcanvas shadow-lg" id="sidebar">
    <ul class="nav">
        @if (auth()->user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="/home">
                    <i class="ti-layout-grid2 menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
        @endif

        @if (auth()->user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="/news">
                    <i class="ti-layout-grid2 menu-icon"></i>
                    <span class="menu-title">Berita</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="/mhs">
                    <i class="ti-layout-grid2 menu-icon"></i>
                    <span class="menu-title">MAHASISWA</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="/beasiswa/show-beasiswa">
                    <i class="ti-layout-grid2 menu-icon"></i>
                    <span class="menu-title">BEASISWA</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->role == 'mahasiswa')
            <li class="nav-item">
                <a class="nav-link" href="/mhs-form">
                    <i class="ti-layout-grid2 menu-icon"></i>
                    <span class="menu-title">FORM PENGAJUAN</span>
                </a>
            </li>
        @endif

        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'mahasiswa')
            <li class="nav-item">
                <a class="nav-link" href="/pengajuan">
                    <i class="ti-layout-grid2 menu-icon"></i>
                    <span class="menu-title">PENGAJUAN</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="/accept">
                    <i class="ti-layout-grid2 menu-icon"></i>
                    <span class="menu-title">PENERIMA BEASISWA</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="/reject">
                    <i class="ti-layout-grid2 menu-icon"></i>
                    <span class="menu-title">PENGAJUAN DITOLAK</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->role == 'mahasiswa')
            <li class="nav-item">
                <a class="nav-link" href="/beasiswa/show-beasiswa">
                    <i class="ti-layout-grid2 menu-icon"></i>
                    <span class="menu-title">INFO BEASISWA</span>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link" href="/login/logout">
                <i class="ti-power-off menu-icon"></i>
                <span class="menu-title">Log Out</span>
            </a>
        </li>

    </ul>

</nav>
