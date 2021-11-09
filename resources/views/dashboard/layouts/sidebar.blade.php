<div class="sidebar text-sm">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header"><i class="nav-icon fas fa-th"></i> REKAM MEDIS</li>
        <li class="nav-item has-treeview {{Request::is('rekammedis*') ? 'menu-is-opening menu-open' : '' }}">
          <a href="#" class="nav-link {{Request::is('rekammedis*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Laporan Rekam Medis
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/rekammedis" class="nav-link">
                <i class="nav-icon {{Request::is('rekammedis') ? 'fas fa-circle text-teal' : 'far fa-circle' }}"></i>
                <p>10 Besar Penyakit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/rekammedis/dinkes" class="nav-link">
                <i class="nav-icon {{Request::is('rekammedis/dinkes') ? 'fas fa-circle text-teal' : 'far fa-circle' }}"></i>
                <p>Laporan Dinkes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan Diagnosa Penyakit</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header"><i class="nav-icon far fa-envelope"></i> OPERASI</li>
        <li class="nav-item has-treeview {{Request::is('operasi*') ? 'menu-is-opening menu-open' : '' }}">
          <a href="#" class="nav-link {{Request::is('operasi*') ? 'active' : '' }}">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Laporan Operasi
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{'/operasi'}}" class="nav-link">
                <i class="far fa-circle nav-icon {{Request::is('operasi') ? 'fas fa-circle text-teal' : 'far fa-circle' }}"></i>
                <p>Operasi</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header"><i class="fas fa-clinic-medical"></i> IGD</li>
        <li class="nav-item has-treeview {{Request::is('igd*') ? 'menu-is-opening menu-open' : '' }}">
          <a href="#" class="nav-link {{Request::is('igd*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-clinic-medical"></i>
            <p>
              Kunjungan IGD
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{'/igd'}}" class="nav-link">
                <i class="far fa-circle nav-icon {{Request::is('igd') ? 'fas fa-circle text-teal' : 'far fa-circle' }}"></i>
                <p>Rekap Kunjungan IGD</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>