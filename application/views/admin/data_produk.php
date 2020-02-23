<?php $this->load->view('temp/partials/header') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Produk
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div> -->
                                </div>
                                <div class="col-sm-6">
                                    <div id="example1_filter" class="dataTables_filter">
                                        <form method="get"> 
                                            <label>Search:
                                                <?= form_input('cari',null,'class="form-control input-sm" aria-controls="example1"') ?>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 5px;">No</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 150px;">Nama Produk</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Harga</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Deskripsi</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Gambar</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Edit</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?Php 
                                            $i = 1;
                                            foreach($produks as $key => $produk) : ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"> <?= $i ?> </td>
                                                <td><?= $produk['nama_produk'] ?></td>
                                                <td><?= $produk['harga'] ?></td>
                                                <td><?= $produk['deskripsi'] ?></td>
                                                <td><img src="<?= base_url('assets/img/produk/'.$produk['gambar'].'') ?>" width="50px" height="50px" alt=""> </td>
                                                <td>
                                                    <a href="<?= site_url('admin/kategori/edit/'.$produk['id'].'') ?>">
                                                        <i class="fa  fa-edit"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="<?= site_url('admin/kategori/hapus/'.$produk['id'].'') ?>">
                                                        <i class="fa fa-trash"></i>
                                                        <span> Hapus</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $i++; endforeach ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">No</th>
                                                <th rowspan="1" colspan="1">Nama Produk</th>
                                                <th rowspan="1" colspan="1">Harga</th>
                                                <th rowspan="1" colspan="1">Deskripsi</th>
                                                <th rowspan="1" colspan="1">Gambar</th>
                                                <th rowspan="1" colspan="1">Edit</th>
                                                <th rowspan="1" colspan="1">Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <!-- <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div> -->
                                    
                                </div>
                                <div class="col-sm-7">
                                    <?php echo $this->pagination->create_links(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

<?php $this->load->view('temp/partials/footer') ?>