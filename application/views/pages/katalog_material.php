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
                <?php for($i=0; $i<3; $i++ ) : ?>
                
                    <div class="card mx-auto mt-2">   
                        <div class="card-body " >
                            <img src="<?= base_url('assets/img/produk/'.$produks[$i]['gambar'].'') ?>" class="card-img-top" alt="...">
                            <h5 class="card-title"><?= $produks[$i]['nama_produk'] ?></h5>
                            <p>Harga : <?= $produks[$i]['harga'] ?> </p>
                            <p class="card-text"><?= $produks[$i]['deskripsi'] ?></p>
                        </div>
                    </div>
                
                <?php endfor ?>
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