<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body>
	<div class="container-xxl bg-white p-0">
		<!-- Spinner Start -->
		<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Spinner End -->


		<?php $this->load->view("_partials/navbar.php") ?>

		<!-- Header End -->
		<div class="container-xxl py-5 bg-dark page-header mb-5">
			<div class="container my-5 pt-5 pb-4">
				<h1 class="display-3 text-white mb-3 animated slideInDown"><?= $title ?></h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb text-uppercase">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= ucwords($this->uri->segment(1) == null ? 'Beranda' : 'beranda') ?></a></li>
						<li class="breadcrumb-item text-white active" aria-current="page"><?= $title ?></li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- Header End -->

		<!-- Jobs Start -->
		<div class="container-xxl py-5">
			<div class="container">
				<!-- <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Saran & Kritik</h1> -->
				<form action="<?= site_url('kritiksaran/store') ?>" method="post">
					<div class="row g-3">
						<div class="col-12">
							<div class="form-floating">
								<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama lengkap disini">
								<label for="nama">Nama Lengkap</label>
							</div>
						</div>
						<div class="col-12">
							<div class="form-floating">
								<input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email dengan benar">
								<label for="email">Email</label>
							</div>
						</div>
						<div class="col-12">
							<div class="form-floating">
								<input type="text" class="form-control" name="subjek" id="subjek" placeholder="Masukkan subjek lengkap disini">
								<label for="subjek">Subjek</label>
							</div>
						</div>
						<div class="col-12">
							<div class="form-floating">
								<textarea class="form-control" placeholder="Masukkan pesan disini" name="message" id="message" style="height: 150px"></textarea>
								<label for="message">Message</label>
							</div>
						</div>
						<div class="col-12">
							<button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- Jobs End -->

		<!-- Footer Start -->
		<?php $this->load->view('_partials/footer.php') ?>
		<!-- Footer End -->


		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
	</div>

	<!-- include js.php -->
	<?php $this->load->view("_partials/js.php") ?>
</body>

</html>