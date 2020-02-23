<?php $this->load->view('temp/partials/header') ?>

<?php 
    $kat=[
        'makanan'=>'Makanan',
        'material'=>'Material'
    ];
?>

<div class="content-wrapper">
<section class="content-header">
      <h1>
        Tambah Produk
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= site_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Produk</li>
      </ol>
    </section>
<section class="content">
    <div class="row">
        <div class="box box-primary">
            <?php echo validation_errors('<div class="alert alert-warning">', '</div>'); ?>
            <?= $error ?>
            <!-- form start -->
            <?= form_open_multipart() ?>
                <div class="box-body">
                    <div class="form-group">
                        <label for="namaProduk">Nama Produk</label>
                        <?= form_input('nama_produk',set_value('nama_produk'),'class="form-control" id="namaProduk"') ?>
                    </div>
                    <div class="form-group">
                        <label for="hargaProduk">Harga</label>
                        <?= form_input('harga',set_value('harga'),'class="form-control" id="hargaProduk"') ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <?= form_dropdown('kategori',$kat,set_value('kategori'),'class="form-control" id="kategori"') ?>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <?= form_input('url',set_value('url'),'class="form-control" id="url"') ?>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <?= form_textarea('deskripsi',set_value('deskripsi'),'class="form-control" id="deskripsi"') ?>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar Produk</label>
                        <?= form_upload('gambar',set_value('gambar'),'id="gambar"') ?>
                        <p class="help-block">Maks size 2MB.</p>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
</div>

<?php $this->load->view('temp/partials/footer') ?>