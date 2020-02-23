<?php 
    $data['loc'] = 'index';
    $this->load->view('partials/header',$data); 
    $this->load->view('partials/slider');
?>

<!-- Welcome -->
<div class="container welcome">
    <h2 class="mt-5">Selamat Datang</h2>
    <div class="row justify-content-center welcome">
        <div class="col-12 col-md-8 col-lg-3 ">
            <img src="<?= base_url('assets/img/gambar/ava.jpg') ?>" class="size" alt="...">      
        </div>
        <div class="col-12 col-md-8 col-lg-5 ml-3">
            <h5>Rozikin</h5>
            <p class="mt-4">Selamat datang di website tokoku, kami menjual aneka jajanan khas Dieng dan berbagai kaca film untuk memperindah ruangan pribadi atau ruangan kerja anda</p>
        </div>
    </div>
    <h4>Hot Produk</h4>
</div>
<!-- Welcome Akhir -->

<!-- Product -->
<div class="product">
    <!-- Foods -->
    <h5 class="ml-5">Makanan</h5>
    <div class="row">
        <?php for($i=0; $i<3; $i++) : ?>
            <div class="col-8 col-md-6 col-lg-2">
                <div class="card ml-5 mt-3 bayangan">
                    <div class="card-body " >
                        <img src="<?= base_url('assets/img/produk/'.$makanan[$i]['gambar'].'') ?>" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        <?php endfor ?>
    </div>
    <!-- Foods Akhir -->
    <!-- Material -->
    <h5 class="ml-5 mt-5 txt-material">Material</h5>
    <div class="row ">
        <?php for($i=0; $i<3; $i++) : ?>
            <div class="col-8 col-md-6 col-lg-2">
                <div class="card ml-5 mt-3 bayangan">
                    <div class="card-body " >
                        <img src="<?= base_url('assets/img/produk/'.$material[$i]['gambar'].'') ?>" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        <?php endfor ?>
    </div>
    <!-- Material Akhir -->
    <div class="ilustrasi-desk">
        <img src="<?= base_url('assets/img/gambar/market.png') ?>" alt="">   
    </div>
    <div class="ilustrasi-mob">
        <img src="<?= base_url('assets/img/gambar/Products-05.png') ?>" class="img-mob-food" alt="">
        <img src="<?= base_url('assets/img/gambar/Products-06.png') ?>" class="img-mob-mat" alt=""> 
    </div>
</div>
<!-- Product Akhir -->

<?php 
    $this->load->view('partials/about');
    $this->load->view('partials/latar_belakang');
    $this->load->view('partials/copyright');
?>