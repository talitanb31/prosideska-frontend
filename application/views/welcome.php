<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php")?>
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

        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="<?php echo base_url()?>assets/img/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Perfect Job That You Deserved</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="<?php echo base_url()?>assets/img/carousel-2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best Startup Job That Fit You</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Alur/Syarat Pengajuan Surat</h1>
                <div class="row g-4">

					<?php foreach($dataSurat as $item) : ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="<?=base_url('welcome/detail/')?><?=$item['id']?>">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3"><?=$item['jenis']?></h6>
                            <p class="mb-0"><?php echo substr($item['syarat'],0,100)."..."?></p>
                        </a>
                    </div>
					<?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
				<h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Portal Berita</h1>
                <div class="row g-5 align-items-center">
					<?php foreach($dataBerita as $item) : ?>
					<div class="col-lg-3">
						<div class="card" style="height: 450px; max-height: max-content">
							<img src="<?='http://localhost/prosideska/assets/berita/'.$item['cover']?>"
                                class="card-img-top"
                                alt="..."
                                style="height: 250px; ">
							<div class="card-body">
								<h5 class="card-title"><?=ucwords($item['title'])?></h5>
                                <p class="card-text"><?=substr($item['deskripsi'],0,30) ?><?= strlen($item['deskripsi']) > 30 ? '...' : '' ?></p>
							</div>
							<div class="card-footer">
								<a href="<?=base_url('berita/detail/')?><?=$item['slug']?>" class="btn btn-primary">Selanjutnya</a>
							</div>
						</div>
					</div>
					<?php endforeach?>
				</div>
			</div>
        </div>
        <!-- About End -->


        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Saran & Kritik</h1>
				<form action="<?= site_url('welcome/store') ?>" method="post">
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

        <!--- Map --->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Lokasi</h1>
            </div>
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
                    
        <!--- Map End --->

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
