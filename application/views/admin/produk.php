<?php
$kat = [
    'makanan' => 'Makanan',
    'material' => 'Material'
];
?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Produk</h1>
    <?php
    if (validation_errors())
        echo '<div class="alert alert-danger" role="alert">' . validation_errors() . '</div>';
    echo $this->session->flashdata('error');
    ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Produk</h6>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-sm-12 col-md-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm">Tambah produk</button>
                </div>
                <div class="col-sm-12 col-md-6 ">
                    <form method="get" class="form-inline my-2 my-lg-0">
                        <?= form_input('cari',null,'class="form-control mr-sm-2" type="search" placeholder="Cari produk"') ?>
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
                    </form>
                </div>
            </div>
            <div class="table-responsive">

                <!-- <div class="row"> -->
                <!-- <div class="col-sm-12"> -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama produk</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>URL</th>                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama produk</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>URL</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($produks as $produk) : ?>
                            <tr>
                                <td><?= $produk['nama_produk'] ?></td>
                                <td><?= $produk['harga'] ?></td>
                                <td><?= $produk['deskripsi'] ?></td>
                                <td><?= $produk['gambar'] ?></td>
                                <td><?= $produk['url'] ?></td>
                                <td>
                                    <a href="" data-toggle="modal" data-target="<?= '#editModal' . $produk['id'] ?>" class="btn btn-primary mb-1">
                                        <i class="fas fa-edit mr-1"></i>Edit
                                    </a>
                                    <a href="" data-toggle="modal" data-target="<?= '#deleteModal' . $produk['id'] ?>" class="btn btn-danger">
                                        <i class="fas fa-trash mr-1"></i>Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <!-- </div> -->
                <!-- </div> -->

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal Add produk -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/produk/postProduk') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="namaProduk" class="col-form-label">Nama Produk</label>
                    <?= form_input('nama_produk', set_value('nama_produk'), 'class="form-control" id="namaProduk"') ?>
                    <?= form_error('nama_produk') ?>
                </div>
                <div class="form-group">
                    <label for="hargaProduk" class="col-form-label">Harga</label>
                    <?= form_input('harga', set_value('harga'), 'class="form-control" id="hargaProduk"') ?>
                    <?= form_error('harga') ?>
                </div>
                <div class="form-group">
                    <label for="kategori" class="col-form-label">Kategori</label>
                    <?= form_dropdown('kategori', $kat, set_value('kategori'), 'class="form-control" id="kategori"') ?>
                    <?= form_error('kategori') ?>
                </div>
                <div class="form-group">
                    <label for="url" class="col-form-label">URL</label>
                    <?= form_input('url', set_value('url'), 'class="form-control" id="url"') ?>
                    <?= form_error('url') ?>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                    <?= form_textarea('deskripsi', set_value('deskripsi'), 'class="form-control" id="deskripsi"') ?>
                    <?= form_error('deskripsi') ?>
                </div>
                <div class="form-group">
                    <label for="gambar" class="col-form-label">Gambar Produk</label>
                    <?= form_upload('gambar', set_value('gambar'), 'id="gambar" class="form-control') ?>
                    <p class="help-block">Maks size 2MB.</p>
                    <?= form_error('gambar') ?>
                </div>

            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type=" submit" class="btn btn-primary">Tambah produk</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($produks as $produk) : ?>
    <!-- Modal Edit produk -->
    <div class="modal fade" id="<?= 'editModal' . $produk['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('admin/produk/editProduk/'.$produk['id']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="namaProduk" class="col-form-label">Nama Produk</label>
                        <?= form_input('nama_produk', set_value('nama_produk',$produk['nama_produk']), 'class="form-control" id="namaProduk"') ?>
                        <?= form_error('nama_produk') ?>
                    </div>
                    <div class="form-group">
                        <label for="hargaProduk" class="col-form-label">Harga</label>
                        <?= form_input('harga', set_value('harga',$produk['harga']), 'class="form-control" id="hargaProduk"') ?>
                        <?= form_error('harga') ?>
                    </div>
                    <div class="form-group">
                        <label for="kategori" class="col-form-label">Kategori</label>
                        <?= form_dropdown('kategori', $kat, set_value('kategori',$produk['kategori']), 'class="form-control" id="kategori"') ?>
                        <?= form_error('kategori') ?>
                    </div>
                    <div class="form-group">
                        <label for="url" class="col-form-label">URL</label>
                        <?= form_input('url', set_value('url',$produk['url']), 'class="form-control" id="url"') ?>
                        <?= form_error('url') ?>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi" class="col-form-label">Deskripsi</label>
                        <?= form_textarea('deskripsi', set_value('deskripsi',$produk['deskripsi']), 'class="form-control" id="deskripsi"') ?>
                        <?= form_error('deskripsi') ?>
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="col-form-label">Gambar Produk</label>
                        <?= form_upload('gambar', set_value('gambar',$produk['gambar']), 'id="gambar" class="form-control') ?>
                        <p class="help-block">Maks size 2MB.</p>
                        <?= form_error('gambar') ?>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type=" submit" class="btn btn-primary">Edit produk</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Modal delete produk -->
    <div class="modal fade" id="<?= 'deleteModal' . $produk['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Deleted data cannot be restored, Click delete to delete this product</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= site_url('admin/produk/hapus/') . $produk['id'] ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>