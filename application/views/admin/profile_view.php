<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
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
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="">
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-info btn-circle btn-lg">
                            <i class="far fa-image"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-circle btn-lg">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-6 mb-4">
            <!-- Collapsable Card -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">My profile</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <h4 class="small font-weight-bold">Name</h4>
                        <div class=" mb-4">
                            <?= $user['name'] ?>
                        </div>
                        <h4 class="small font-weight-bold">E-mail</h4>
                        <div class=" mb-4">
                            <?= $user['email'] ?>
                        </div>
                        <h4 class="small font-weight-bold">Created since</h4>
                        <div class=" mb-4">
                            <?= date("d M Y",$user['date_created']) ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
    </div>

</div>
<!-- /.container-fluid -->