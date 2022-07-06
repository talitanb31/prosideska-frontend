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
		<div class="container-xxl py-5 bg-dark page-header-pengajuan mb-5">
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
				<form action="<?= site_url("RequestSurat/store") ?>" method="post">
					<div class="row g-3">
						<div class="col-md-12">
							<div class="form-floating">
								<input type="hidden" name="jenis_surat" id="jenis_surat">
								<select name="id_jenis_surat" id="id_jenis_surat" class="form-select jenisSurat" required>
									<option value="">Pilih jenis surat</option>
									<?php foreach ($dataSurat as $item) : ?>
										<option value="<?= $item['id'] ?>" data-jenis="<?= $item['jenis'] ?>"><?= $item['jenis'] ?></option>
									<?php endforeach ?>
								</select>
								<label for="name">Pilih Jenis Surat</label>
							</div>
						</div>
						<div class="inputSurat row" style="margin-top:20px">
						</div>
						<div class="col-12">
							<button class="btn btn-primary w-100 py-3" type="submit">Kirim Permintaan</button>
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
	<script>
		$(".jenisSurat").change(function() {
			var jenis = $(this).find(':selected').data('jenis')
			$('.inputSurat').html('')
			if (jenis == 'Surat Keterangan Pindah') {
				<?php $this->load->view('request_surat/surat-pindah') ?>
			} else if (jenis == 'SKCK') {
				<?php $this->load->view('request_surat/skck') ?>
			} else if (jenis == 'Surat Kelahiran') {
				<?php $this->load->view('request_surat/surat-kelahiran') ?>
			} else if (jenis == 'Surat Tidak Mampu') {
				<?php $this->load->view('request_surat/surat-tidak-mampu') ?>
			} else if (jenis == 'Surat Keterangan Belum Menikah') {
				<?php $this->load->view('request_surat/surat-belum-menikah') ?>
			} else if (jenis == 'Surat Usaha') {
				<?php $this->load->view('request_surat/surat-usaha') ?>
			} else if (jenis == 'Surat Kematian') {
				<?php $this->load->view('request_surat/surat-kematian') ?>
			} else if (jenis == 'Surat Kuasa') {
				<?php $this->load->view('request_surat/surat-kuasa') ?>
			} else if (jenis == 'Surat Keterangan Kehilangan') {
				<?php $this->load->view('request_surat/surat-kehilangan') ?>
			} else if (jenis == 'Surat Keterangan Perjalanan') {
				<?php $this->load->view('request_surat/surat-perjalanan') ?>
			} else if (jenis == 'Surat Perwalian') {
				<?php $this->load->view('request_surat/surat-perwalian') ?>
			}

			$('#jenis_surat').val(jenis)
		});
		$('.inputSurat').on('click', '.tambahKeluarga', function() {
			$('#keluarga').append(`
				<div class="row" id="hapusFamily"">
					<div class="col-md-4">
						<label for="">Keluarga Yang Pindah</label>
						<input type="number" class="form-control" placeholder="NIK" name="nik_keluarga[]">
					</div>
					<div class="col-md-4">
						<label for=""></label>
						<input type="text" class="form-control" placeholder="Nama Keluarga" name="nama_keluarga[]">
					</div>
					<div class="col-md-4">
						<label for=""></label>
						<input type="number" class="form-control" placeholder="SHDK" name="shdk[]">
					</div>
				</div>
			`);
		});
		$('.inputSurat').on('click', '.hapusKeluarga', function() {
			$('#hapusFamily').remove()
		});
	</script>
</body>

</html>