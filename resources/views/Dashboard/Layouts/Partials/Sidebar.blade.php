<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/informasi*') ? 'active' : '' }}"
                    href="/dashboard/informasi">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Informasi
                </a>
            </li>
        </ul>

        @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>ADMINISTRATOR</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/publikasi*') ? 'active' : '' }}"
                        href="/dashboard/publikasi">
                        <span data-feather="external-link" class="align-text-bottom"></span>
                        Publikasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/kategori*') ? 'active' : '' }}"
                        href="/dashboard/kategori">
                        <span data-feather="grid" class="align-text-bottom"></span>
                        Kategori
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/pengguna*') ? 'active' : '' }}"
                        href="/dashboard/pengguna">
                        <span data-feather="users" class="align-text-bottom"></span>
                        Pengguna
                    </a>
                </li>
            </ul>
        @endcan

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>UTILITES</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/profil*') ? 'active' : '' }}"
                    href="/dashboard/profil/{{ auth()->user()->id }}/edit">
                    <span data-feather="settings" class="align-text-bottom"></span>
                    Pengaturan
                </a>
            </li>
        </ul>

    </div>
</nav>
