<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edocument | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="<?php echo base_url() . "assets/css/"; ?>style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/adminlite/";?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/adminlite/";?>plugins/iCheck/square/blue.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="container">
<div class="login-box">
  <div class="login-logo">
      <h3><a href="<?php echo base_url();?>"><img src="<?php echo base_url()."assets/images/logo.png";?>" width="300px"></a></h3>
    <a href="<?php echo base_url();?>">tqf-Document System</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Please enter email and password</p>

      <form action="<?php echo base_url();?>login/login_validate" method="post">
        <div class="form-group has-feedback">
          <input type="email" name="user_email" class="form-control" placeholder="Email">
<!--          <span class="fa fa-envelope form-control-feedback"></span>-->
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="user_password" class="form-control" placeholder="Password">
<!--          <span class="fa fa-lock form-control-feedback"></span>-->
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo base_url()."signup";?>" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url() . "assets";?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() . "assets";?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() . "assets";?>/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
