<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <div class="d-flex flex-grow-1">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 35px; line-height: 20px;">
                <h1>Desa Pangombusan</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav font-weight-bold ml-auto">
                <li class="nav-item">
                    <a href="/masyarakat/dashboard" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tentang Desa</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ route('structure') }}" class="dropdown-item">Struktur Pemerintahan Desa</a>
                        <a href="{{ route('visimisi') }}" class="dropdown-item">Visi Misi</a>
                        <a href="{{route('profilDesa')}}" class="dropdown-item">Profil Desa</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{route('suratIndex')}}" class="dropdown-item">Surat Pengantar Pembuatan KTP</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('saran')}}" class="nav-link">Saran</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('galery') }}" class="nav-link">Galeri</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengumuman') }}" class="nav-link">
                        Pengumuman
                        <span class="badge badge-primary ml-1">3</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</div>