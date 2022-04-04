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
			<a href="<?=base_url('requestsurat') ?>" class="nav-item nav-link <?= $this->uri->segment(1) === 'requestsurat' ? 'active' : '' ?>">Request Surat</a>
			<!-- <div class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
				<div class="dropdown-menu rounded-0 m-0">
					<a href="job-list.html" class="dropdown-item">Job List</a>
					<a href="job-detail.html" class="dropdown-item">Job Detail</a>
				</div>
			</div> -->
			<a href="<?=base_url('notifikasi') ?>" class="nav-item nav-link <?= $this->uri->segment(1) === 'notifikasi' ? 'active' : '' ?>">Notifikasi</a>
			
			<!-- <a href="contact.html" class="nav-item nav-link">Kritik Saran</a> -->
			<!-- <a href="contact.html" class="nav-item nav-link"></a> -->
		</div>
		<!-- <i class="fa fa-arrow-right ms-3"></i> -->
		<a href="" class="btn btn-primary btn-sm rounded-0 pt-4 px-3 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
	</div>
	
</nav>
<!-- Navbar End -->
