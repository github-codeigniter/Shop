<nav class="navbar navbar-vertical fixed-left navbar-expand-md " id="sidebar">
  <div class="container-fluid">

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Brand -->
    <a class="navbar-brand" href="<?php echo base_url('admin/ds/statistik') ?>">
      <img src="<?php echo base_url()?>assets/dashboard/img/logo.svg" class="navbar-brand-img 
      mx-auto" alt="...">
    </a>

    <!-- User (xs) -->
    <div class="navbar-user d-md-none">

      <!-- Dropdown -->
      <div class="dropdown">

        <!-- Toggle -->
        <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-sm avatar-online">
            <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
          </div>
        </a>

        <!-- Menu -->
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
          <a href="profile-posts.html" class="dropdown-item">Profile</a>
          <a href="settings.html" class="dropdown-item">Settings</a>
          <hr class="dropdown-divider">
          <a href="sign-in.html" class="dropdown-item">Logout</a>
        </div>

      </div>

    </div>

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidebarCollapse">

      <!-- Form -->
      <form class="mt-4 mb-3 d-md-none">
        <div class="input-group input-group-rounded input-group-merge">
          <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="fe fe-search"></span>
            </div>
          </div>
        </div>
      </form>

      <!-- Navigation -->
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="#sidebarDashboards" data-toggle="collapse" role="button" aria-expanded="<?php echo $this->uri->segment(3) == 'statistik' ? 'true': '' ?>" aria-controls="sidebarDashboards">
            <i class="fe fe-home"></i> Dasbor
          </a>
          <div class="collapse <?php echo $this->uri->segment(3) == 'statistik' ? 'show': '' ?>" id="sidebarDashboards">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/ds/statistik') ?>" class="nav-link <?php echo $this->uri->segment(3) == 'statistik' ? 'active': '' ?>">
                  Statistik
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="<?php echo $this->uri->segment(3) == 'tabel' || $this->uri->segment(3) == 'onsite' ? 'true': '' ?>" aria-controls="sidebarPages">
            <i class="fe fe-file"></i> Produk
          </a>
          <div class="collapse <?php echo $this->uri->segment(3) == 'tabel' || $this->uri->segment(3) == 'onsite' ? 'show': '' ?>" id="sidebarPages">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/ds/tabel') ?>" class="nav-link <?php echo $this->uri->segment(3) == 'tabel' ? 'active': '' ?>">
                  Inventori Produk
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/ds/onsite') ?>" class="nav-link <?php echo $this->uri->segment(3) == 'onsite' ? 'active': '' ?>">
                  Penjualan
                </a>
              </li>
            </ul>
          </div>
        </li>

      </ul>

      <!-- Divider -->
      <hr class="navbar-divider my-3">

      <!-- Heading -->
      <h6 class="navbar-heading">
        Opsi Pengembang
      </h6>

      <!-- Navigation -->
      <ul class="navbar-nav mb-md-4">
        <li class="nav-item">
          <a class="nav-link" href="#sidebarBasics" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBasics">
            <i class="fe fe-clipboard"></i> Pengaturan
          </a>
          <div class="collapse " id="sidebarBasics">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item ">
                <a href="#!" class="nav-link">
                  Sistem
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>

      <!-- Push content down -->
      <div class="mt-auto"></div>
      
      <!-- User (md) -->
      <div class="navbar-user d-none d-md-flex" id="sidebarUser">

        <!-- Icon -->
        <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
          <span class="icon">
            <i class="fe fe-bell"></i>
          </span>
        </a>

        <!-- Dropup -->
        <div class="dropup">

          <!-- Toggle -->
          <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-sm avatar-online">
              <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
            </div>
          </a>

          <!-- Menu -->
          <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
            <a href="profile-posts.html" class="dropdown-item">Profile</a>
            <a href="settings.html" class="dropdown-item">Settings</a>
            <hr class="dropdown-divider">
            <a href="<?= base_url("admin/web/logOut")?>" class="dropdown-item">Logout</a>
          </div>

        </div>

        <!-- Icon -->
        <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
          <span class="icon">
            <i class="fe fe-search"></i>
          </span>
        </a>

      </div>
      

    </div> <!-- / .navbar-collapse -->

  </div>
</nav>



<nav class="navbar navbar-vertical navbar-vertical-sm fixed-left navbar-expand-md " id="sidebarSmall">
  <div class="container-fluid">

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarSmallCollapse" aria-controls="sidebarSmallCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Brand -->
    <a class="navbar-brand" href="index.html">
      <img src="assets/img/logo.svg" class="navbar-brand-img 
      mx-auto" alt="...">
    </a>

    <!-- User (xs) -->
    <div class="navbar-user d-md-none">

      <!-- Dropdown -->
      <div class="dropdown">

        <!-- Toggle -->
        <a href="#" id="sidebarSmallIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-sm avatar-online">
            <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
          </div>
        </a>

        <!-- Menu -->
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarSmallIcon">
          <a href="profile-posts.html" class="dropdown-item">Profile</a>
          <a href="settings.html" class="dropdown-item">Settings</a>
          <hr class="dropdown-divider">
          <a href="sign-in.html" class="dropdown-item">Logout</a>
        </div>
      </div>

    </div>

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidebarSmallCollapse">
      <div class="navbar-user d-none d-md-flex flex-column" id="sidebarSmallUser">
      </div>
    </div> <!-- / .navbar-collapse -->

  </div>
</nav>