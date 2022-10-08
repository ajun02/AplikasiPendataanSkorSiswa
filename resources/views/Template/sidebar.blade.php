<aside class="main-sidebar sidebar-primary-danger elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="Gambar/logosmki.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>SMKI Utama</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-2 mb-2 d-flex">
        <!-- <div class="image">
          <img src="" class="img-circle elevation-2">
        </div> -->
        <div class="info">
          <a href="#" class="d-block">Skor Pelanggaran Siswa</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Form
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kategori" class="nav-link {{ e($__env->yieldContent('submenu')) =='kategori' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pengawas" class="nav-link {{ e($__env->yieldContent('submenu')) =='pengawas' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengawas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kelas" class="nav-link {{ e($__env->yieldContent('submenu')) =='kelas' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pelanggaran" class="nav-link {{ e($__env->yieldContent('submenu')) =='pelanggaran' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pelanggaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/siswa" class="nav-link {{ e($__env->yieldContent('submenu')) =='siswa' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penilaian" class="nav-link {{ e($__env->yieldContent('submenu')) =='penilaian' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penilaian</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
                <a href="/penilaian/cetak" class="nav-link {{ e($__env->yieldContent('submenu')) =='cetak' ? 'active' : '' }}">
                  <i class="far fa-copy nav-icon"></i>
                  <p>Cetak Data</p>
                </a>
              </li>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" ounlic="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
              </p>

            </a>

            <form id="logout-form"action="{{ route('logout') }}" method="POST" style="display: none;">
          @crsf
          </form>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>