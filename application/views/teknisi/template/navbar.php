<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" >
        <button id="sidebarToggleTop" class="btn btn-link  rounded-circle mr-3">
            <i class="fa fa-bars" ></i>
        </button>
<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">


    <!-- Nav Item - Alerts -->


    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?= base_url('asset/');?>>
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$this->session->userdata('nama_user');?></span>
            <i class=" fas fa-user fa-sm fa-fw mr-2 text-gray-600 "></i>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in collapse"
            aria-labelledby="userDropdown">
    
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" <?= site_url('login/logout');?>>
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Keluar
            </a>
        </div>
    </li>

</ul>

</nav>

