<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/temp/sb-admin-2/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/temp/sb-admin-2/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <?= form_open(null,'class="user"') ?>
                <div class="form-group">
                    <?= form_input('name',set_value('name'),'class="form-control form-control-user" placeholder="Full name"') ?>
                    <?php echo form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <?= form_input('email',set_value('email'),'class="form-control form-control-user" placeholder="E-mail"') ?>
                    <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <?= form_password('password1',null,'class="form-control form-control-user" placeholder="Password"') ?>
                    <?php echo form_error('password1', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <?= form_password('password2',null,'class="form-control form-control-user" placeholder="Repeat password"') ?>
                    <?php echo form_error('password2', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/temp/sb-admin-2/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/temp/sb-admin-2/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/temp/sb-admin-2/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/temp/sb-admin-2/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>
