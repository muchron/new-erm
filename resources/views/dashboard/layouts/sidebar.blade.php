<div class="sidebar text-sm">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
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
              <a href="/rekammedis/penyakit" class="nav-link">
                <i class="nav-icon {{Request::is('rekammedis/penyakit') ? 'fas fa-circle text-teal' : 'far fa-circle' }}"></i>
                <p>Laporan Diagnosa Penyakit</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview {{Request::is('operasi*') ? 'menu-is-opening menu-open' : '' }}">
          <a href="#" class="nav-link {{Request::is('operasi*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-book-medical"></i>
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
        <li class="nav-item has-treeview {{Request::is('persalinan*') ? 'menu-is-opening menu-open' : '' }}">
          <a href="#" class="nav-link {{Request::is('persalinan*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-baby"></i>
            <p>
              Tindakan Persalinan
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{'/persalinan'}}" class="nav-link">
                <i class="far fa-circle nav-icon {{Request::is('persalinan') ? 'fas fa-circle text-teal' : 'far fa-circle' }}"></i>
                <p>Laporan Tindakan Persalinan</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview {{Request::is('igd*') ? 'menu-is-opening menu-open' : '' }}">
          <a href="#" class="nav-link {{Request::is('igd*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-ambulance"></i>
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
        <li class="nav-item has-treeview {{Request::is('ralan*') ? 'menu-is-opening menu-open' : '' }}">
          <a href="#" class="nav-link {{Request::is('ralan*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user-nurse"></i>
            <p>
              Kunjungan Rawat Jalan
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{'/ralan'}}" class="nav-link">
                <i class="far fa-circle nav-icon {{Request::is('ralan') ? 'fas fa-circle text-teal' : 'far fa-circle' }}"></i>
                <p>Status Lama / Baru</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{'/ralan/laporan'}}" class="nav-link">
                <i class="far fa-circle nav-icon {{Request::is('ralan/laporan') ? 'fas fa-circle text-teal' : 'far fa-circle' }}"></i>
                <p>Laporan BPJS</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview {{Request::is('ranap*') ? 'menu-is-opening menu-open' : '' }}">
          <a href="#" class="nav-link {{Request::is('ranap*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-procedures"></i>
            <p>
              Kunjungan Rawat Inap
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{'/ranap'}}" class="nav-link">
                <i class="far fa-circle nav-icon {{Request::is('ranap') ? 'fas fa-circle text-teal' : 'far fa-circle' }}"></i>
                <p>Status Lama / Baru</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{'/ranap/laporan'}}" class="nav-link">
                <i class="far fa-circle nav-icon {{Request::is('ranap/laporan') ? 'fas fa-circle text-teal' : 'far fa-circle' }}"></i>
                <p>Laporan BPJS</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{'/ranap/bayi'}}" class="nav-link">
                <i class="far fa-circle nav-icon {{Request::is('ranap/bayi') ? 'fas fa-circle text-teal' : 'far fa-circle' }}"></i>
                <p>Pasien Bayi</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>