<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

  </div>

  <!-- Content Row -->
  <div class="row">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Produk</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $produk ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Produk Makanan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $produk_makanan ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-utensils fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Produk Material</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $produk_material ?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fab fa-magento fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">User</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-6 mb-4">
      <!-- Photo profile -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Photo profile</h6>
        </div>
        <div class="card-body">
          <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('assets/img/profile/') . $profile[0]['profile'] ?>" alt="">
          </div>
          <div class="text-center">
            <?= form_open_multipart('admin/dashboard/editProfileCompany/'.$profile[0]['id'].'') ?>
                <?= form_upload('gambar', set_value('gambar'), 'id="gambar" class="btn btn-info"') ?>
                <?= form_error('gambar') ?>
                <button type="submit" class="btn btn-primary">Edit produk</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->