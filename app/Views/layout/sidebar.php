<!-- SideBar -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url(); ?>">Sentiong Inventory</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url(); ?>">SERY</a>
          </div>
          <ul class="sidebar-menu">

            <?php $request = \Config\Services::request(); ?>

              <!-- Sidebar Dashboard -->
              <li class="<?=($request->uri->getSegment(1)==='')?'active':''?>"><a class="nav-link" href="<?= base_url(); ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <!-- End Sidebar Dashboard -->
              
            <?php if (has_permission('transaksi')) : ?>
              <!-- Sidebar Formulir -->
              <li class="menu-header">Transaksi</li>
              <li class="nav-item dropdown
              <?php if($request->uri->getSegment(1) == 'masuk' || $request->uri->getSegment(1) == 'keluar')  : ?>
              active
              <?php endif; ?>
              ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-wpforms"></i> <span>Form Transaksi</span></a>
                <ul class="dropdown-menu">
                  <li class="<?=($request->uri->getSegment(1)==='masuk')?'active':''?>"><a class="nav-link" href="<?= base_url(); ?>/masuk"> <i class="fab fa-wpforms mx-0"></i>Material Masuk</a></li>
                  <li class="<?=($request->uri->getSegment(1)==='keluar')?'active':''?>"><a class="nav-link" href="<?= base_url(); ?>/keluar"> <i class="fab fa-wpforms mx-0"></i>Material Keluar</a></li>
                </ul>
              </li>
              <!-- End Sidebar Formulir -->
            <?php endif; ?>
              
              <!-- Sidebar tabel -->
              <li class="menu-header">Master Data</li>
              <li class="nav-item dropdown
              <?php if($request->uri->getSegment(1) == 'tblbarang' || $request->uri->getSegment(1) == 'tblmasuk' || $request->uri->getSegment(1) == 'tblkeluar' || $request->uri->getSegment(1) == 'tblsatuan')  : ?>
              active
              <?php endif; ?>
              ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-clipboard-list"></i> <span>Tabel Material</span></a>
                <ul class="dropdown-menu">
                  <li class="<?=($request->uri->getSegment(1)==='tblbarang')?'active':''?>"><a class="nav-link" href="<?= base_url(); ?>/tblbarang"><i class="fas fa-clipboard-list mx-0"></i> Stok Material</a></li>
                  <li class="<?=($request->uri->getSegment(1)==='tblmasuk')?'active':''?>"><a class="nav-link" href="<?= base_url(); ?>/tblmasuk"><i class="fas fa-clipboard-list mx-0"></i> Material Masuk</a></li>
                  <li class="<?=($request->uri->getSegment(1)==='tblkeluar')?'active':''?>"><a class="nav-link" href="<?= base_url(); ?>/tblkeluar"><i class="fas fa-clipboard-list mx-0"></i> Material Keluar</a></li>

                <?php if (in_groups('admin')) : ?>
                  <li class="<?=($request->uri->getSegment(1)==='tblsatuan')?'active':''?>"><a class="nav-link" href="<?= base_url(); ?>/tblsatuan"><i class="fas fa-clipboard-list mx-0"></i> Satuan</a></li>
                <?php endif; ?>
                </ul>
              </li>
              <!-- End Sidebar tabel -->

              <li class="menu-header"></li>
            <?php if (in_groups('admin')) : ?>
              <!-- Sidebar Users -->
              <li class="<?=($request->uri->getSegment(1)==='user')?'active':''?>"><a class="nav-link" href="<?= base_url('user'); ?>"><i class="fas fa-users"></i> <span>Users</span></a></li>
              <!-- End Sidebar Users -->
            <?php endif; ?>

              <!-- Sidebar profile -->
              <li class="<?=($request->uri->getSegment(1)==='profile')?'active':''?>"><a class="nav-link" href="<?= base_url('profile/'. user()->id); ?>"><i class="fas fa-user"></i> <span>My Profile</span></a></li>
              <!-- End Sidebar profile -->
              
              <!-- Sidebar logout -->
              <li><a class="nav-link" href="#" data-toggle="modal" data-target="#logout" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
              <!-- End Sidebar Logout -->
        </aside>
      </div>
<!-- End Sidebar -->