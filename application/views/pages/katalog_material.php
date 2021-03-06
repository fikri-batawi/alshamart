<?php 
    $data['loc'] = 'katalog-material';
    $this->load->view('partials/header',$data);

 ?>
    <!-- Katalog -->
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-10 col-lg-3">
                <h3>Materials</h3>    
            </div>
            <div class="col-10 col-lg-4 number">
                <a>
                    <img src="<?= base_url('assets/img/icons/icon-call.png') ?>" class="icon" alt="">
                    0881025128403</a>
                
                    <a href="https://wa.me/6283857879078" target="_blank"> 
                    <img src="<?= base_url('assets/img/icons/icon-wa.png') ?>" class="icon" alt="">
                    083857879078
                    </a>

            </div>
        </div>
    </div>
    <div class="katalog-material">
        <div class="container ">
            <div class="row">
                <?php foreach($produks as $produk) : ?>
                
                    <div class="card mx-auto mt-3">   
                        <div class="card-body " >
                            <img src="<?= base_url('assets/img/produk/'.$produk['gambar'].'') ?>" class="card-img-top" alt="...">
                            <h5 class="card-title"><?= $produk['nama_produk'] ?></h5>
                            <p>Harga : <?= $produk['harga'] ?> </p>
                            <p class="card-text"><?= $produk['deskripsi'] ?></p>
                        </div>
                    </div>
                
                <?php endforeach ?>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-10 desc">
                    <h5 class="mt-2">Macam-macam kaca Film : </h5>
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <p>Kaca Film Sandblast <br> Berfungsi sebagai kaca grafik yang memberikan kesan privasi ruangan siang dan malam</p>
                            <p>Kaca Film Motif <br> Berfungsi mnghiasi kaca jendela atau kaca pembatas/partisi (kantor. Gedung. Rumah tinggal) <br> sehingga menjadi lebih exclusif dan modern.</p>
                            <p>Kaca film Ryben (black) <br> Berfungsi menolak/meredam panas dari sinar matahari UV dari 70% sampai 90% dan mempunyai daya tahan rekat yang sangat kuat sehingga tidak mudah terkelupas dan tidak mudah pudar. Tahan gores. Sekaligus berfungsi untuk melindungi kaca.</p>
                            <p>Kaca Film Reflective (one way miror) <br> Berfungi pandangan hanya satu sisi saja yang dapat melihat dan mengurangi panas sinar matahari 70% sampai 90% tahan gores <br>sekaligus melindungi kaca.</p>
                            <p>Cuting Stiker <br> Mendekor ruangan sesuai design yang di inginkan Seperti <br> Logo/nama perusahaan, Pepohonan, Hewan/binatang, Model batik, Kaligrafi dll</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="ilustrasi-mob">
            <img src="<?= base_url('assets/img/gambar/Products-06.png') ?>" class="img-left" alt="">
            <img src="<?= base_url('assets/img/gambar/Materials-Mobile-02.png') ?>" class="img-mid" alt="">
            <img src="<?= base_url('assets/img/gambar/Products-06.png') ?>" class="img-right" alt="">
        </div>
    </div>
    <div class="ilustrasi-desk-material">
            <img src="<?= base_url('assets/img/gambar/Materials-03.png') ?>" class="img-mid" alt="">
            <img src="<?= base_url('assets/img/gambar/Materials-02.png') ?>" class="img-left" alt="">
            <img src="<?= base_url('assets/img/gambar/Materials-04.png') ?>" class="img-right" alt="">
    </div>
    <!-- Katalog Akhir -->

<?php $this->load->view('partials/copyright') ?>