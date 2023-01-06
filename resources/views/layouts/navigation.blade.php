<ul class="navbar-nav">

    <li class="nav-item @if (request()->routeIs('home')) active @endif">
        <a class="nav-link" href="{{ route('home') }}">
            <span class="nav-link-icon d-md-none d-lg-inline-block">
                <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="5 12 3 12 12 3 21 12 19 12" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>
            </span>
            <span class="nav-link-title">
                {{ __('Dashboard') }}
            </span>
        </a>
    </li>

    {{-- <li class="nav-item @if (request()->routeIs('users.index')) active @endif">
        <a class="nav-link" href="{{ route('users.index') }}">
            <span class="nav-link-icon d-md-none d-lg-inline-block">
                <!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                </svg>
            </span>
            <span class="nav-link-title">
                {{ __('Users') }}
            </span>
        </a>
    </li> --}}

    <li class="nav-item dropdown @if (request()->is('admin/penilaian*')) active @endif">
        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside"
            role="button" aria-expanded="false">
            <span class="nav-link-icon d-md-none d-lg-inline-block">
                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-details" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M13 5h8"></path>
                    <path d="M13 9h5"></path>
                    <path d="M13 15h8"></path>
                    <path d="M13 19h5"></path>
                    <rect x="3" y="4" width="6" height="6" rx="1"></rect>
                    <rect x="3" y="14" width="6" height="6" rx="1"></rect>
                </svg>
            </span>
            <span class="nav-link-title">
                Penilaian Mutu
            </span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item @if (request()->is('admin/penilaian/aspek*')) active @endif" href="{{ route('aspek.index') }}">
                Aspek Penilaian
            </a>
            <a class="dropdown-item @if (request()->is('admin/penilaian/uraian*')) active @endif" href="{{ route('uraian.index') }}">
                Uraian Pekerjaan
            </a>
            <div class="dropend">
                <a class="dropdown-item dropdown-toggle @if (request()->is('admin/penilaian/audit*')) active @endif"
                    href="{{ route('audit.index') }}" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                    role="button" aria-expanded="false">
                    Evaluasi Kinerja
                </a>
                <div class="dropdown-menu">
                    <a href="{{ route('audit.create') }}" class="dropdown-item">
                        Input Hasil Evaluasi
                    </a>
                    <a href="{{ route('audit.index') }}" class="dropdown-item">
                        Lihat Hasil Evaluasi
                    </a>
                    <a href="#" class="dropdown-item">
                        Lihat Check List Penilaian
                    </a>
                </div>
            </div>
            <a class="dropdown-item" href="#">
                Laporan Hasil Penilaian
            </a>
        </div>
    </li>

</ul>
