<!-- SideBar -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">Sentiong Inventory</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">S-I</a>
          </div>
          <ul class="sidebar-menu">

              <!-- Sidebar Dashboard -->
              <li><a class="nav-link" href="<?= base_url(); ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <!-- End Sidebar Dashboard -->
              
              <!-- Sidebar Formulir -->
              <li class="menu-header">Formulir</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-wpforms"></i> <span>Formulir</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?= base_url(); ?>/tblmasuk/form"> <i class="fab fa-wpforms mx-0"></i>Barang Masuk</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>/form/formbarangkeluar"> <i class="fab fa-wpforms mx-0"></i>Barang Keluar</a></li>
                </ul>
              </li>
              <!-- End Sidebar Formulir -->
              
              <!-- Sidebar tabel -->
              <li class="menu-header">Tabel</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-clipboard-list"></i> <span>Tabel</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?= base_url(); ?>/tblbarang"><i class="fas fa-clipboard-list mx-0"></i> Barang</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>/tblmasuk"><i class="fas fa-clipboard-list mx-0"></i> Barang Masuk</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>/tabel/tblbarangkeluar"><i class="fas fa-clipboard-list mx-0"></i> Barang Keluar</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>/tblsatuan"><i class="fas fa-clipboard-list mx-0"></i> Satuan</a></li>
                </ul>
              </li>
              <!-- End Sidebar tabel -->


              <!-- Sidebar Users -->
              <li><a class="nav-link" href="<?= base_url(); ?>/user/tbluser"><i class="fas fa-users"></i> <span>Users</span></a></li>
              <!-- End Sidebar Users -->

        </aside>
      </div>
<!-- End Sidebar -->