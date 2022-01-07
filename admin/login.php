<?php
session_start();
include '../koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login - Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../template/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href=""><b>YAYASAN MUSHLIHUN</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <?php
      if (isset($_GET['msg'])) {
        echo '<div class="alert alert-warning alert-dismissible">' .  $_GET['msg'] . ' </div>';
      }

      ?>
      <p class="login-box-msg">Silahkan Login</p>

      <form action="" method="POST">
        <div class="form-group has-feedback">
          <input type="text" name="user" class="form-control" placeholder="Username">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="pass" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">

          </div>
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
          </div>
          <!-- /.col -->
        </div>

      </form>
      <?php

      if (isset($_POST['submit'])) {
        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);

        $cek = mysqli_query($conn, "SELECT * FROM admin_akun WHERE username = '" . $user . "' ");
        if (mysqli_num_rows($cek) > 0) {

          $d = mysqli_fetch_object($cek);
          if (md5($pass) == $d->password) {
            $_SESSION['status_login'] = true;
            $_SESSION['uid'] = $d->id;
            $_SESSION['uname'] = $d->nama;
            $_SESSION['ulevel'] = $d->level;

            echo "<script>window.location = 'dashboard.php'</script>";
          } else {
            echo '<br>';
            echo '<div class="alert alert-warning alert-dismissible"> Password salah</div>';
          }
        } else {
          echo '<div class="alert alert-warning alert-dismissible"> Username Tidak Ditemukan </div>';
        }
      }
      ?>


      <div class="social-auth-links text-center">

      </div>
      <!-- /.social-auth-links -->




    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="../template/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="../template/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>

<script type="text/javascript">
  window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(300, function() {
      $(this).remove();
    });

  }, 3000);
</script>

</html>