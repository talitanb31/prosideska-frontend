<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
	<a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
		<h1 class="m-0 text-primary">WebSurat</h1>
	</a>
	<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<div class="navbar-nav ms-auto p-4 p-lg-0">
			<a href="<?=base_url() ?>" class="nav-item nav-link <?php echo $this->uri->segment(1) != null ? '' : 'active' ?>">Beranda</a>
			<a href="<?=base_url('berita') ?>" class="nav-item nav-link <?= $this->uri->segment(1) === 'berita' ? 'active' : '' ?>">Portal Berita</a>
			<a href="<?=base_url('alursyarat') ?>" class="nav-item nav-link <?= $this->uri->segment(1) === 'alursyarat' ? 'active' : '' ?>">Alur/Syarat Pengajuan Surat</a>
			<a href="<?=base_url('requestsurat') ?>" class="nav-item nav-link <?= $this->uri->segment(1) === 'requestsurat' ? 'active' : '' ?>">Pengajuan Surat</a>
		</div>
		<?php if(isset($_SESSION['nama'])) { ?>
		<ul class="navbar-nav">
            <li class="nav-item btn-rotate dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $_SESSION['nama'] ?>
            </a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="<?= site_url('notifikasi/index') ?>">Notifikasi</a>
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
