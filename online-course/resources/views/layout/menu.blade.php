<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="{{route('dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Data Kursus</div>
                    <a class="nav-link" href="{{route('kursus.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-solid fa-list-ol"></i></div>
                        Kursus
                    </a>
                    <div class="sb-sidenav-menu-heading">Data Materi</div>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-solid fa-list-ol"></i></div>
                        Materi
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Login sebagai: Admin
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">