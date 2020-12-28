<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <div class="sidebar-brand-text mx-3"><span id="jd1">Kita</span><span id="jd2">Kursus</span><span id="jd3">Kuy!</span></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading Kursus -->
    <div class="sidebar-heading">
        Kursus
    </div>

    <!-- Nav Item - Kursus -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKursus" aria-expanded="true"
            aria-controls="collapseKursus">
            <i class="fas fa-fw fa-table"></i>
            <span>Kursus Saya</span>
        </a>
        <div id="collapseKursus" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kursus</h6>
                <a class="collapse-item" href="/dashboard/kursus-my">Kursus saya</a>
            </div>
        </div>
    </li>
    

    <!-- Nav Item - Kursus -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboard/buat-kursus">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Buat Kursus</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading Privat -->
    <div class="sidebar-heading">
        Privat
    </div>

    <!-- Nav Item - Privat -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboard/permintaan-privat">
            <i class="fas fa-fw fa-table"></i>
            <span>Permintaan Privat</span></a>
    </li>

    <!-- Nav Item - Privat -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePrivat" aria-expanded="true"
            aria-controls="collapsePrivat">
            <i class="fas fa-fw fa-table"></i>
            <span>Privat Saya</span>
        </a>
        <div id="collapsePrivat" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Privat</h6>
                <a class="collapse-item" href="/dashboard/privat-my">Privat Saya</a>

                <h6 class="collapse-header">Murid</h6>
                <a class="collapse-item" href="/dashboard/murid-privat">Murid saya</a>
            </div>
        </div>
    </li>
    

    <!-- Nav Item - Privat -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboard/buat-privat">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Buat Privat</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
