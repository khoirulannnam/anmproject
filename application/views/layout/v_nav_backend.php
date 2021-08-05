<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url('admin') ?>" class="brand-link">
	<i class="fas fa-user mr-2"></i>
		<span class="brand-text font-weight-light">Halaman Admin</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				
			</div>
			<div class="info">
				<a href="#" class="d-block">Hallo <?= $this->session->userdata('nama_user') ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
			   with font-awesome or any other icon font library -->

				

				<li class="nav-item">
					<a href="<?= base_url('kategori') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kategori') {
																				echo "active";
																			} ?>">
						<i class="nav-icon fas fa-list"></i>
						<p> Kategori </p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('barang')  ?>" class="nav-link <?php if ($this->uri->segment(1) == 'barang') {
																				echo "active";
																			} ?>">
						<i class="nav-icon fas  fa-cubes"></i>
						<p> Barang </p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('gambarbarang')  ?>" class="nav-link <?php if ($this->uri->segment(1) == 'gambarbarang') {
																					echo "active";
																				} ?>">
						<i class="nav-icon fas  fa-camera"></i>
						<p> Gambar Barang </p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('admin/pesanan_masuk')  ?>" class="nav-link <?php if ($this->uri->segment(2) == 'pesanan_masuk' and $this->uri->segment(1) == 'admin') {
																							echo "active";
																						} ?>">
						<i class="nav-icon fas  fa-shopping-bag"></i>
						<p> Pesanan Masuk </p>
					</a>
				</li>

				

				<li class="nav-item">
					<a href="<?= base_url('admin/setting') ?>" class="nav-link">
						<i class="nav-icon fa fa-wrench"></i>
						<p> Pengaturan </p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('user') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'user') {
																			echo "active";
																		} ?>">
						<i class="nav-icon fas fa-users"></i>
						<p> User </p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('auth/logout_user') ?>" class="nav-link">
						<i class="nav-icon fas fa-share-square"></i>
						<p> Keluar </p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"><?= $title ?></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
