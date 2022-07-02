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

        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="<?php echo base_url() ?>assets/img/sawah3.JPG" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">#AsaUntukDesa</h1>
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Sistem Informasi Desa Sukowinangun</h1>
                                    <h1 class="display-3 text-white animated slideInDown mb-4"></h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Jadikan proses pelayanan Administrasi kelurahan lebih mudah, cepat, dan efektif.</p>
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

                    <?php foreach ($dataSurat as $item) : ?>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item rounded p-4" href="<?= base_url('alursyarat/detail/') ?><?= $item['id'] ?>">
                                <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                                <h6 class="mb-3"><?= $item['jenis'] ?></h6>
                                <p class="mb-0"><?php echo substr($item['syarat'], 0, 100) . "..." ?></p>
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
                    <?php foreach ($dataBerita as $key => $item) : ?>
                        <div class="col-lg-3">
                            <div class="card" style="height: 450px; max-height: max-content">
                                <img src="<?= $item->thumbnail ?>" class="card-img-top" alt="..." style="height: 250px; ">
                                <div class="card-body">
                                    <h5 class="card-title"><?= ucwords($item->title) ?></h5>
                                    <p class="card-text"><?= substr($item->description, 0, 30) ?><?= strlen($item->description) > 30 ? '...' : '' ?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="<?= base_url('berita/detail/') ?><?= strtolower($item->title) ?>" class="btn btn-primary">Selanjutnya</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
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
                <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.328218450006!2d111.32743211465456!3d-7.647810994486093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e799234fbd3c4f5%3A0x77c7c6105bafc5af!2sKantor%20Kelurahan%20Sukowinangun!5e0!3m2!1sen!2sid!4v1656047342433!5m2!1sen!2sid" style="min-height: 400px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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