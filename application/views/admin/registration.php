<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/temp/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/temp/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/temp/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/temp/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/temp/AdminLTE/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">

  <div class="register-box-body">
    <p class="login-box-msg">Register a new admin</p>

    <?= form_open() ?>
      <div class="form-group has-feedback">
        <?= form_input('name',set_value('name'),'class="form-control" placeholder="Full name"') ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?php echo form_error('name', '<small class="text-danger">', '</small>'); ?>
      </div>
      <div class="form-group has-feedback">
        <?= form_input('email',set_value('email'),'class="form-control" placeholder="E-mail"') ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
      </div>
      <div class="form-group has-feedback">
        <?= form_password('password1',null,'class="form-control" placeholder="Password"') ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php echo form_error('password1', '<small class="text-danger">', '</small>'); ?>
      </div>
      <div class="form-group has-feedback">
        <?= form_password('password2',null,'class="form-control" placeholder="Repeat password"') ?>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <?php echo form_error('password2', '<small class="text-danger">', '</small>'); ?>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-lg-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <a href="<?= base_url('auth') ?>" class="text-center">I already have a account?</a>
    </div>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?= base_url() ?>assets/temp/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>assets/temp/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url() ?>assets/temp/AdminLTE/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
