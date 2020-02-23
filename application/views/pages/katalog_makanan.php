<?php 
    $data['loc'] = 'katalog-makanan';
    $this->load->view('partials/header', $data);
 ?>
    <!-- Katalog -->
    <div class="container-fluid">
        <div class="row justify-content-between ">
            <div class="col-10 col-lg-3">
                <h3>Foods</h3>    
            </div>
            <div class="col-10 col-lg-4">
                <a href="https://www.tokopedia.com/alshacarica" target="_blank"> 
                    <img src="<?= base_url('assets/img/icons/icon-tokped.png') ?>" class="icon" alt="">
                </a>
                <a href="https://www.shopee.co.id/alshacarica" target="_blank">
                    <img src="<?= base_url('assets/img/icons/icon-shoppe.png') ?>" class="icon" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="katalog-makanan">
        <div class="container ">
            <div class="row">
                <?php foreach ($produks as $key => $produk) : ?>

                    <div class="card mt-3 mx-auto">   
                        <div class="card-body ">
                            <img src="<?= base_url('assets/img/produk/'.$produk['gambar'].'') ?>" class="card-img-top" alt="...">
                            <h5 class="card-title"><?= $produk['deskripsi'] ?></h5>
                            <p class="card-text">Rp. <?= $produk['harga'] ?>,-</p>
                            <p class="card-text"><?= $produk['deskripsi'] ?></p>
                            <a href="<?= $produk['url'] ?>" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="ilustrasi-desk">
            <img src="<?= base_url('assets/img/gambar/Catalogue-02.png') ?>" class="img-mid" alt="">
            <img src="<?= base_url('assets/img/gambar/Catalogue-03.png') ?>" class="img-left" alt="">
            <img src="<?= base_url('assets/img/gambar/Catalogue-04.png') ?>" class="img-right" alt="">
        </div>
        <div class="ilustrasi-mob">
            <img src="<?= base_url('assets/img/gambar/Catalogue-03.png') ?>" class="img-mid" alt="">
            <img src="<?= base_url('assets/img/gambar/Products-05.png') ?>" class="img-left" alt="">
            <img src="<?= base_url('assets/img/gambar/Catalogue-04.png') ?>" class="img-right" alt="">
            <img src="<?= base_url('assets/img/gambar/Foods-Mobile-02.png') ?>" class="img-big" alt="">
        </div>
        
    </div>
    <!-- Katalog Akhir -->

<?php $this->load->view('partials/copyright') ?>