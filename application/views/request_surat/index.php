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
				<form action="<?= site_url("RequestSurat/store") ?>" method="post">
					<div class="row g-3">
						<div class="col-md-12">
							<div class="form-floating">
								<select name="jenis_surat" id="jenis_surat" class="form-select jenisSurat">
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
			if (jenis == 'Surat Pindah') {
				$(".inputSurat").append(`
					<div class="col-md-6">
						<label for="">Alamat</label>
						<input type="text" class="form-control" placeholder="Alamat" name="alamat">
					</div>
					<div class="col-md-6">
						<label for="">RT</label>
						<input type="number" class="form-control" placeholder="RT" name="rt">
					</div>
					<div class="col-md-6">
						<label for="">RW</label>
						<input type="number" class="form-control" placeholder="RW" name="rw">
					</div>
					<div class="col-md-6">
						<label for="">Kelurahan</label>
						<input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan">
					</div>
					<div class="col-md-6">
						<label for="">Kecamatan</label>
						<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan">
					</div>
					<div class="col-md-6">
						<label for="">Kabupaten/Kota</label>
						<input type="text" class="form-control" placeholder="Kabupaten/Kota" name="kab">
					</div>
					<div class="col-md-6">
						<label for="">Propinsi</label>
						<input type="text" class="form-control" placeholder="Propinsi" name="prov">
					</div>
					<div class="col-md-6">
						<label for="">Tanggal Pindah</label>
						<input type="date" class="form-control" placeholder="Tanggal Pindah" name="tgl_pindah">
					</div>
					<div class="col-md-6">
						<label for="">Alasan Pindah</label>
						<input type="text" class="form-control" placeholder="Alasan Pindah" name="alasan">
					</div>
					<div class="col-md-6">
						<label for="">Klasifikasi Pindah</label>
						<input type="text" class="form-control" placeholder="Klasifikasi Pindah" name="klasifikasi">
					</div>
					<div class="col-md-6">
						<label for="">Jenis Pindah</label>
						<input type="text" class="form-control" placeholder="Jenis Pindah" name="jenis">
					</div>
					<div class="col-md-6">
						<label for="">Status No KK Bagi Yang Tidak Pindah</label>
						<select class="form-control" name="tidak_pindah">
							<option value="0">---Pilih Status---</option>
							<option value="1">Numpang KK</option>
							<option value="2">Membuat KK Baru</option>
							<option value="3">Tidak Ada Keluarga Yang Ditinggal</option>
							<option value="4">No KK Tetap</option>
						</select>
					</div>
					<div class="col-md-6">
						<label for="">Status No KK Bagi Yang  Pindah</label>
						<select class="form-control" name="pindah">
							<option value="0">---Pilih Status---</option>
							<option value="1">Numpang KK</option>
							<option value="2">Membuat KK Baru</option>
							<option value="3">No KK Tetap</option>
						</select>
					</div>
					<div class="col-md-6">
						<label for="">Rencana Tanggal Pindah</label>
						<input type="date" class="form-control" placeholder="Rencana Tanggal Pindah" name="rencana_tgl_pindah">
					</div>
					<div class="col-md-12 row">
						<div class="row row-keluarga" id="keluarga">
							<div class="col-md-4">
								<label for="">Keluarga Yang Pindah</label>
								<input type="number" class="form-control" placeholder="NIK" name="nik_keluarga">
							</div>
							<div class="col-md-4">
								<label for=""></label>
								<input type="text" class="form-control" placeholder="Nama Keluarga" name="nama_keluarga">
							</div>
							<div class="col-md-4">
								<label for=""></label>
								<input type="number" class="form-control" placeholder="SHDK" name="shdk">
							</div>
						</div>
						<div class="col-md-2">
							<label></label>
							<a class="btn btn-success btn-sm tambahKeluarga" style="margin-top: 27px;"><i class="fa fa-plus"></i> Tambah</a>
						</div>
						<div class="col-md-2">
							<label></label>
							<a class="btn btn-danger btn-sm hapusKeluarga" style="margin-top: 27px;"><i class="fa fa-minus"></i> Hapus</a>
						</div>
					</div>
				`);
			} else if (jenis == 'SKCK') {
				$(".inputSurat").append(`
					<div class="col-md-6">
						<label for="">Alamat</label>
						<input type="text" class="form-control" placeholder="Alamat" name="alamat">
					</div>
					<div class="col-md-6">
						<label for="">RT</label>
						<input type="number" class="form-control" placeholder="RT" name="rt">
					</div>
					<div class="col-md-6">
						<label for="">RW</label>
						<input type="number" class="form-control" placeholder="RW" name="rw">
					</div>
					<div class="col-md-6">
						<label for="">Kelurahan</label>
						<input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan">
					</div>
					<div class="col-md-6">
						<label for="">Kecamatan</label>
						<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan">
					</div>
					<div class="col-md-6">
						<label for="">Kabupaten/Kota</label>
						<input type="text" class="form-control" placeholder="Kabupaten/Kota" name="kab">
					</div>
					<div class="col-md-6">
						<label for="">Propinsi</label>
						<input type="text" class="form-control" placeholder="Propinsi" name="prov">
					</div>
					<div class="col-md-6">
						<label for="">Tanggal Pindah</label>
						<input type="date" class="form-control" placeholder="Tanggal Pindah" name="tgl_pindah">
					</div>
					<div class="col-md-6">
						<label for="">Alasan Pindah</label>
						<input type="text" class="form-control" placeholder="Alasan Pindah" name="alasan">
					</div>
					<div class="col-md-6">
						<label for="">Klasifikasi Pindah</label>
						<input type="text" class="form-control" placeholder="Klasifikasi Pindah" name="klasifikasi">
					</div>
					<div class="col-md-6">
						<label for="">Jenis Pindah</label>
						<input type="text" class="form-control" placeholder="Jenis Pindah" name="jenis">
					</div>
					<div class="col-md-6">
						<label for="">Status No KK Bagi Yang Tidak Pindah</label>
						<select class="form-control" name="tidak_pindah">
							<option value="0">---Pilih Status---</option>
							<option value="1">Numpang KK</option>
							<option value="2">Membuat KK Baru</option>
							<option value="3">Tidak Ada Keluarga Yang Ditinggal</option>
							<option value="4">No KK Tetap</option>
						</select>
					</div>
					<div class="col-md-6">
						<label for="">Status No KK Bagi Yang  Pindah</label>
						<select class="form-control" name="pindah">
							<option value="0">---Pilih Status---</option>
							<option value="1">Numpang KK</option>
							<option value="2">Membuat KK Baru</option>
							<option value="3">No KK Tetap</option>
						</select>
					</div>
					<div class="col-md-6">
						<label for="">Rencana Tanggal Pindah</label>
						<input type="date" class="form-control" placeholder="Rencana Tanggal Pindah" name="rencana_tgl_pindah">
					</div>
					<div class="col-md-12 row">
						<div class="row row-keluarga" id="keluarga">
							<div class="col-md-4">
								<label for="">Keluarga Yang Pindah</label>
								<input type="number" class="form-control" placeholder="NIK" name="nik_keluarga">
							</div>
							<div class="col-md-4">
								<label for=""></label>
								<input type="text" class="form-control" placeholder="Nama Keluarga" name="nama_keluarga">
							</div>
							<div class="col-md-4">
								<label for=""></label>
								<input type="number" class="form-control" placeholder="SHDK" name="shdk">
							</div>
						</div>
						<div class="col-md-2">
							<label></label>
							<a class="btn btn-success btn-sm tambahKeluarga" style="margin-top: 27px;"><i class="fa fa-plus"></i> Tambah</a>
						</div>
						<div class="col-md-2">
							<label></label>
							<a class="btn btn-danger btn-sm hapusKeluarga" style="margin-top: 27px;"><i class="fa fa-minus"></i> Hapus</a>
						</div>
					</div>
				`);
			}
		});
		$('.inputSurat').on('click', '.tambahKeluarga', function() {
			$('#keluarga').append(`
				<div class="row" id="hapusFamily"">
					<div class="col-md-4">
						<label for="">Keluarga Yang Pindah</label>
						<input type="number" class="form-control" placeholder="NIK" name="nik_keluarga">
					</div>
					<div class="col-md-4">
						<label for=""></label>
						<input type="text" class="form-control" placeholder="Nama Keluarga" name="nama_keluarga">
					</div>
					<div class="col-md-4">
						<label for=""></label>
						<input type="number" class="form-control" placeholder="SHDK" name="shdk">
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
