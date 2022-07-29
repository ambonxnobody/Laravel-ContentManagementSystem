<header class="navbar navbar-dark sticky-top bg-success flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-center" href="/dashboard">Admin MI-MH Gogourung</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-success w-100 rounded-0 border-0" type="text" placeholder="Cari..."
        aria-label="Cari...">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form method="POST" action="/dashboard/logout">
                @csrf
                <button type="submit" class="nav-link px-3 bg-success border-0 text-white">Logout <span
                        data-feather="log-out"></span></button>
            </form>
        </div>
    </div>
</header>
