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
						<div class="card" style="">
							<img src="<?=base_url('assets/img/testimonial-1.jpg')?>" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title"><?=ucwords($item['title'])?></h5>
								<p class="card-text"><?=substr($item['deskripsi'],0,100)?></p>
								<a href="<?=base_url('berita/detailberita/')?><?=$item['id']?>" class="btn btn-primary">Selanjutnya</a>
							</div>
						</div>
					</div>
					<?php endforeach?>
				</div>
				<div class="d-flex justify-content-end mt-5">
					<a href="#" class="btn btn-primary">Selengkapnya</a>
				</div>
			</div>
        </div>
        <!-- About End -->


        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Saran & Kritik</h1>
				<form>
					<div class="row g-3">
						<div class="col-md-6">
							<div class="form-floating">
								<input type="text" class="form-control" id="name" placeholder="Your Name">
								<label for="name">Your Name</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-floating">
								<input type="email" class="form-control" id="email" placeholder="Your Email">
								<label for="email">Your Email</label>
							</div>
						</div>
						<div class="col-12">
							<div class="form-floating">
								<input type="text" class="form-control" id="subject" placeholder="Subject">
								<label for="subject">Subject</label>
							</div>
						</div>
						<div class="col-12">
							<div class="form-floating">
								<textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
								<label for="message">Message</label>
							</div>
						</div>
						<div class="col-12">
							<button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
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
