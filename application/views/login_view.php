<!--<!DOCTYPE html>
<html Lang="en">
<head>
	<meta charset="UTF-8">
	<title>E-Febrics Login </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-4-offset-4">
				<h2>Login</h2>
				<form action="" method="POST">
				<div class="form-group">
					<label for="username"></label>
					<input type="text" name="username" id="username" class="form-control" placeholder="Username">
				</div>	

				<div class="form-group">
					<label for="password"></label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Password">
				</div>

					<input type="submit" type="submit" value="Giriş" class="btn btn-primary">
				</form>

			</div>
		</div>
	</div>
</body>
</html>	-->



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Müşteri Hizmetleri</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->		
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a style="color:#009531;"><big><b>E-Febrics</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Müşteri Giriş</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="username" name="username" id="username" class="form-control" placeholder="Kullanıcı Adı">
          <div class="input-group-append">
            <div class="input-group-text">

            	
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Şifre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
               Beni Hatırla
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="insert" class="btn btn-primary btn-block">Giriş</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->
		<br>

      <p class="mb-1">
        <a href="forgot-password.html">Şifremi unuttum</a>
      </p>

       
      <p class="mb-0">
        <a href="Register" class="text-center">Yeni bir kayıt oluştur</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>

