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

		  <!-- Berita Start -->
		  <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <form action="<?php site_url('berita/index') ?>" class="row" method="get">
                        <div class="col-xl-4 col-md-4 col-sm-4 col-8">
                            <input type="text" name="q" id="q" class="form-control" placeholder="Cari disini...">
                        </div>
                        <div class="col-xl-2 col-md-2 col-sm-2 col-4">
                            <button type="submit" class="btn btn-success">Cari</button>
                        </div>
                    </form>
					<?php foreach($dataBerita as $item) : ?>
					<div class="col-lg-3">
						<div class="card">
                            <img src="<?='http://localhost/prosideska/assets/berita/'.$item['cover']?>"
                                class="card-img-top"
                                alt="..."
                                height="200">
                            <div class="card-body">
								<h5 class="card-title"><?=ucwords($item['title'])?></h5>
								<p class="card-text"><?=substr($item['deskripsi'],0,30) ?><?= strlen($item['deskripsi']) > 30 ? '...' : '' ?></p>
								<a href="<?=base_url('berita/detail/')?><?=$item['slug']?>" class="btn btn-primary">Selanjutnya</a>
							</div>
						</div>
					</div>
					<?php endforeach?>
				
                </div>
            </div>
        </div>
        <!-- Category End -->

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
