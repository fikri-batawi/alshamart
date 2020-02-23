<?php 
    $this->load->view('partials/header');
?>

    <!-- Produk -->
    <h3 class="mb-2">Produk</h3>
    <div class="produk bg-color">
        <div class="container">
            <h5 class="mt-2">Makanan</h5>
            <div class="row makanan">

                <?php for($i=0; $i<2; $i++) : ?>
                    <div class="col-8 col-lg-4 mt-2">
                        <div class="card">   
                            <div class="card-body " >
                                <img src="<?= base_url('assets/img/produk/'.$makanan[$i]['gambar'].'') ?>" class="card-img-top" alt="...">
                                <h5 class="card-title">Rp. <?= $makanan[$i]['harga'] ?>,-</h5>
                                <p class="card-text"><?= $makanan[$i]['deskripsi'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor ?>

                <div class="col-8 col-lg-4 mt-2">
                <div class="card bayangan">   
                    <div class="card-body " >
                        <h5 class="card-title">Jajanan Khas Dieng</h5>
                        <p>Aneka macam makanan ringan dan minuman khas Dieng, Wonosobo</p>
                        <p>"Cita rasa khas Dieng"</p>
                        <a href="<?= site_url('produk/makanan') ?>" class="tombol">Selengkapnya</a>
                    </div>
                    </div>
                </div>
            </div>

            <h5 class="mt-4">Material</h5>
            <div class="row material">

                <div class="col-8 col-lg-4 mt-2">
                <div class="card bayangan">   
                    <div class="card-body " >
                        <h5 class="card-title">Jajanan Khas Dieng</h5>
                        <p>Aneka macam makanan ringan dan minuman khas Dieng, Wonosobo</p>
                        <p>"Cita rasa khas Dieng"</p>
                        <a href="<?= site_url('produk/material') ?>" class="tombol">Selengkapnya</a>
                    </div>
                    </div>
                </div>

                <?php for($i=0; $i<2; $i++) : ?>
                    <div class="col-8 col-lg-4 mt-2">
                        <div class="card bayangan">   
                            <div class="card-body " >
                                <img src="<?= base_url('assets/img/produk/'.$material[0]['gambar'].'') ?>" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
        <img src="<?= base_url('assets/img/gambar/Products-05.png') ?>" alt="" class="img-makanan img">
        <img src="<?= base_url('assets/img/gambar/Products-04.png') ?>" alt="" class="img-material img">
    </div>

    <div class="bg-img">
        <img src="<?= base_url('assets/img/gambar/Products-02.png') ?>" class="img-bot-left img" alt="">
        <img src="<?= base_url('assets/img/gambar/Products-03.png') ?>" class="img-bot-right img" alt="">
    </div>

    <!-- ilustrasi mobile -->
    <div class="ilustrasi-mob">
        <img src="<?= base_url('assets/img/gambar/Products-05.png') ?>" class="img-top" alt="">
        <img src="<?= base_url('assets/img/gambar/Products-06.png') ?>" class="img-bot" alt="">
    </div>
    <!-- ilustrasi mobile -->

<?php $this->load->view('partials/copyright') ?>