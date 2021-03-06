<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
	<a href="<?= base_url('') ?>" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
		<img src="<?= 'http://localhost/prosideska-frontend/assets/img/logo.png' ?>" style="max-width:10rem;" class="d-inline-block align-top">
		<!-- <h1 class="m-0 text-primary">WebSurat</h1> -->
	</a>
	<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<div class="navbar-nav ms-auto p-4 p-lg-0">
			<a style="font-size: 12px;" href="<?= base_url() ?>" class="nav-item nav-link <?php echo $this->uri->segment(1) != null ? '' : 'active' ?>">Beranda</a>
			<a style="font-size: 12px;" href="<?= base_url('berita') ?>" class="nav-item nav-link <?= $this->uri->segment(1) === 'berita' ? 'active' : '' ?>">Portal Berita</a>
			<a style="font-size: 12px;" href="<?= base_url('alursyarat') ?>" class="nav-item nav-link <?= $this->uri->segment(1) === 'alursyarat' ? 'active' : '' ?>">Alur/Syarat Pengajuan Surat</a>
			<a style="font-size: 12px;" href="<?= base_url('kritiksaran') ?>" class="nav-item nav-link <?= $this->uri->segment(1) === 'kritiksaran' ? 'active' : '' ?>">Kritik Saran</a>
			<a style="font-size: 12px;" href="<?= base_url('requestsurat') ?>" class="nav-item nav-link <?= $this->uri->segment(1) === 'requestsurat' ? 'active' : '' ?>">Pengajuan Surat</a>
		</div>
		<?php if (isset($_SESSION['nik']) && !empty($_SESSION['nik'])) { ?>
			<ul class="navbar-nav p-4 p-lg-0">
				<li class="nav-item btn-rotate dropdown">
					<a style="font-size: 12px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?= $_SESSION['nama_user'] ?>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="<?= site_url('notifikasi/index') ?>">Notifikasi <span class="text-danger"><?= $totalNotifikasi ?></span></a>
						<a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a>
					</div>
				</li>
			</ul>
		<?php } else { ?>
			<a href="<?= site_url("auth/index") ?>" class="btn btn-primary btn-sm rounded-0 pt-4 px-3 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
		<?php } ?>
	</div>

</nav>
<!-- Navbar End -->