<?php
session_start();

if (isset($_SESSION['username'])) {
    header("location: index.php");
}

require_once 'dbkoneksi.php';

$usernameErr = $passwordErr = $authenticationErr = "";
$username = $password = '';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['username'])) {
        $usernameErr = 'Username tidak boleh kosong!';
    } else {
        $username = test_input($_POST['username']);
    }
    if (empty($_POST['password'])) {
        $passwordErr = 'Password tidak boleh kosong!';
    } else {
        $password = md5(test_input($_POST['password']));
    }

    $authenticated = false;
    
    if (!$usernameErr && !$passwordErr) {

        $sql = "SELECT * FROM user WHERE username = '$username'";
        $query = $dbh->query($sql);
        $user = $query->fetchObject();
    
    
        if ($user->username === $username && $password) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['name'] = $user->name;
            $_SESSION['role'] = $user->role;
            $authenticated = true;
        }    
    }

    if ($authenticated) {
        header("location: index.php");
    } else {
        $authenticationErr = 'Username atau Password salah!';
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Puskesmas | Login </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-dark">
    <div class="card-header text-center">
        <p class="h1"><b>Puskesmas</b></p>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to your Account</p>

      
      
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="mb-3">
            <div class="input-group">
             <input name="username" type="username" class="form-control" placeholder="Username">
                <div class="input-group-append">
                     <div class="input-group-text">
                     <span class="fas fa-user-alt"></span>
                     </div>
                </div>
            </div>
            <span class="mt-2 text-red"><?= $usernameErr ?></span>
        </div>
         
        <div class="mb-3">
           <div class="input-group">
            <input name="password" type="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
           </div>
           <span class="mt-2 text-red"><?= $passwordErr ?></span>
        </div>  

        <button type="submit" class="btn btn-dark btn-block">Sign In</button>
        <span class="d-block text-red text-center mt-1"><?= $authenticationErr ?></span>
      </form>

        <p class="mb-0 mt-2 text-center"><a href="register.php" class="text-center">Register New Account</a></p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
