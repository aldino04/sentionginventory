<!-- SideBar -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url(); ?>">Sentiong Inventory</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url(); ?>">S-I</a>
          </div>
          <ul class="sidebar-menu">

              <!-- Sidebar Dashboard -->
              <li><a class="nav-link" href="<?= base_url(); ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <!-- End Sidebar Dashboard -->
              
            <?php if (has_permission('transaksi')) : ?>
              <!-- Sidebar Formulir -->
              <li class="menu-header">Formulir</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-wpforms"></i> <span>Formulir</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?= base_url(); ?>/tblmasuk/form"> <i class="fab fa-wpforms mx-0"></i>Barang Masuk</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>/tblkeluar/form"> <i class="fab fa-wpforms mx-0"></i>Barang Keluar</a></li>
                </ul>
              </li>
              <!-- End Sidebar Formulir -->
            <?php endif; ?>
              
              <!-- Sidebar tabel -->
              <li class="menu-header">Tabel</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-clipboard-list"></i> <span>Tabel</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?= base_url(); ?>/tblbarang"><i class="fas fa-clipboard-list mx-0"></i> Barang</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>/tblmasuk"><i class="fas fa-clipboard-list mx-0"></i> Barang Masuk</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>/tblkeluar"><i class="fas fa-clipboard-list mx-0"></i> Barang Keluar</a></li>

                <?php if (in_groups('admin')) : ?>
                  <li><a class="nav-link" href="<?= base_url(); ?>/tblsatuan"><i class="fas fa-clipboard-list mx-0"></i> Satuan</a></li>
                <?php endif; ?>
                </ul>
              </li>
              <!-- End Sidebar tabel -->

            <?php if (in_groups('admin')) : ?>
              <!-- Sidebar Users -->
              <li><a class="nav-link" href="<?= base_url('user'); ?>"><i class="fas fa-users"></i> <span>Users</span></a></li>
              <!-- End Sidebar Users -->
            <?php endif; ?>

              <!-- Sidebar profile -->
              <li><a class="nav-link" href="<?= base_url('profile/'. user()->id); ?>"><i class="fas fa-user"></i> <span>My Profile</span></a></li>
              <!-- End Sidebar profile -->
              
              <!-- Sidebar logout -->
              <li><a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
              <!-- End Sidebar Logout -->
        </aside>
      </div>
<!-- End Sidebar -->