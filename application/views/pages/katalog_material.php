<?php 
    $data['loc'] = 'katalog-material';
    $this->load->view('partials/header',$data);

 ?>
    <!-- Katalog -->
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-10 col-lg-3">
                <h3>Material</h3>    
            </div>
            <div class="col-10 col-lg-3">
                <a href="https://www.tokopedia.com/alshacarica" target="_blank"> 
                    <img src="<?= base_url('assets/img/icons/icon-tokped.png') ?>" class="icon" alt=""></a>
                <a href="https://www.shopee.co.id/alshacarica" target="_blank"> 
                    <img src="<?= base_url('assets/img/icons/icon-shoppe.png') ?>" class="icon" alt=""></a>
            </div>
        </div>
    </div>
    <div class="katalog-material">
        <div class="container ">
            <div class="row">
                <?php foreach ($produks as $key => $produk) : ?>
                <div class="col-8 col-lg-4 mt-3">
                    <div class="card">   
                        <div class="card-body " >
                            <img src="<?= base_url('assets/img/produk/'.$produk['gambar'].'') ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="ilustrasi-desk">
            <img src="<?= base_url('assets/img/gambar/Materials-03.png') ?>" class="img-mid" alt="">
            <img src="<?= base_url('assets/img/gambar/Materials-02.png') ?>" class="img-left" alt="">
            <img src="<?= base_url('assets/img/gambar/Materials-04.png') ?>" class="img-right" alt="">
        </div>
        <div class="ilustrasi-mob">
            <img src="<?= base_url('assets/img/gambar/Products-06.png') ?>" class="img-left" alt="">
            <img src="<?= base_url('assets/img/gambar/Materials-Mobile-02.png') ?>" class="img-mid" alt="">
            <img src="<?= base_url('assets/img/gambar/Products-06.png') ?>" class="img-right" alt="">
        </div>
    </div>
    <!-- Katalog Akhir -->

<?php $this->load->view('partials/copyright') ?>