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

		<!-- Header End -->
		<div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown"><?=ucwords($this->uri->segment(1))?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="<?=base_url() ?>"><?=ucwords($this->uri->segment(1) == null ? 'Beranda' : 'beranda')?></a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"><?=ucwords($this->uri->segment(1))?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->

        <!-- Detail Berita Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-3">
                        <div class="d-flex align-items-start mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="<?='http://localhost/prosideska/assets/berita/'.$data['cover']?>" alt="" style="width: 460px; height: 460px;">
                            
                        </div>       
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <h3 class="mb-3"><?= $data['title'] ?></h3>
                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Dibuat pada <?= $data['created_at'] ?></span>
                        </div>
                        <div class="row mt-4">
                            <h4 class="mb-3">Deskripsi Berita</h4>
                            <p><?= $data['deskripsi'] ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="mb-4">Berita lainnya</h4>
                        <?php foreach($beritaLainnya as $item) : ?>
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <div class="row">
                                <div class="col-4">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="<?='http://localhost/prosideska/assets/berita/'.$item['cover']?>" alt="" style="width: 100px; height: 100px;">
                                </div>
                                <div class="col-6">
                                    <h6><?= $item['title'] ?></h6>
                                    <span class="text-truncate me-3" style="font-size: 12px;"><i class="far fa-clock text-primary me-2"></i>Dibuat pada <?= $item['created_at'] ?></span>
                                </div>
                            </div>
                            <p class="m-0 mt-2"><?=substr($item['deskripsi'],0,30) ?><?= strlen($item['deskripsi']) > 30 ? '...' : '' ?></p>
                            <a href="<?=base_url('berita/detail/')?><?=$item['slug']?>" class="mt-2 btn btn-primary">Selengkapnya</a>
                        </div>
                        <?php endforeach?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Detail Berita End -->

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
