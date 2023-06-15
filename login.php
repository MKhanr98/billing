<?php
include '_includes/connect.php';  
// $adminLogin = 0;
// $userLogin = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check login as admin
  $adminQuery = "SELECT * FROM admin WHERE email = ? AND password = ?";
  $adminStmt = mysqli_prepare($connection, $adminQuery);
  mysqli_stmt_bind_param($adminStmt, "ss", $email, $password);
  mysqli_stmt_execute($adminStmt);
  $adminResult = mysqli_stmt_get_result($adminStmt);

  if ($adminResult) {
    $adminNum = mysqli_num_rows($adminResult);
    if ($adminNum > 0) {
      // $adminLogin = 1;
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['key'] = "admin123";

      // Retrieve the name and id of the admin from the database
      // $adminQuery = "SELECT Name, id FROM admin WHERE email = ?";
      // $adminStmt = mysqli_prepare($connection, $adminQuery);
      // mysqli_stmt_bind_param($adminStmt, "s", $email);
      // mysqli_stmt_execute($adminStmt);
      // $adminResult = mysqli_stmt_get_result($adminStmt);
      $adminRow = mysqli_fetch_assoc($adminResult);
      // $adminName = $adminRow['Name'];
      // $adminId = $adminRow['id'];

      // Store the name and id of the admin in session variables
      $_SESSION['name'] =  $adminRow['name'];
      $_SESSION['id'] = $adminRow['id'];

      header('location: admin_dashboard.php');
    } else {
      $invalid = 1;
    }
  }

  // Check login as user
  $userQuery = "SELECT * FROM user WHERE email = ? AND password = ?";
  $userStmt = mysqli_prepare($connection, $userQuery);
  mysqli_stmt_bind_param($userStmt, "ss", $email, $password);
  mysqli_stmt_execute($userStmt);
  $userResult = mysqli_stmt_get_result($userStmt);

  if ($userResult) {
    $userNum = mysqli_num_rows($userResult);
    if ($userNum > 0) {
      // $userLogin = 1;
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['key'] = "user123";

      // Retrieve the name and id of the user from the database
      // $userQuery = "SELECT Name, id FROM user WHERE email = ?";
      // $userStmt = mysqli_prepare($connection, $userQuery);
      // mysqli_stmt_bind_param($userStmt, "s", $email);
      // mysqli_stmt_execute($userStmt);
      // $userResult = mysqli_stmt_get_result($userStmt);
      $userRow = mysqli_fetch_assoc($userResult);
      // $userName =;
      // $userId = ;

      // Store the name and id of the user in session variables
      $_SESSION['name'] =  $userRow['name'];
      $_SESSION['id'] = $userRow['id'];

      header('location: user_dashboard.php');
    } else {
      $invalid = 1;
    }
  }
}
?>
 <!-- #region -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Billing Sys</title>
  <link rel="icon" type="image/x-icon" href="images/icons/favicon.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
<!-- AdminLTE Theme style -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">

</head>
<?php
if($invalid) {
echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
  <strong>Error Invalid Credential</strong> 
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>";
}
?>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Ncai</b> Peshawar</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class=" fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" name="password" id="pass">
        <div class="input-group-append">
        <div class="input-group-text">
        <span class="fas fa-eye toggle-password" onclick="togglePassword()"></span>
        </div>
        </div>
        </div>

        <div class="row">
          <div class="col-8">
          
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
          
          </div>
          <!-- /.col -->
          <!-- <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div> -->
          <!-- /.col -->
        </div>
     

      <div class="social-auth-links text-center mt-2 mb-3">
        <button type="submit" href="#" class="btn btn-block btn-primary">
         <!--  <i class="fab fa-facebook mr-2"></i> --> Login 
        </button>
         </form>
        <a href="register.php" class="btn btn-block" style="background-color: #e9ecef">
    <!-- <i class="fab fa-google-plus mr-2"></i> --> Sign Up 
  </a>
      </div>
   
      <p class="mb-0">
        <a href="register.php" class="text-center">Register as new member</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<script>
    function togglePassword() {
      var passwordField = document.getElementById("pass");
      if (passwordField.type === "password") {
        passwordField.type = "text";
      } else {
        passwordField.type = "password";
      }
    }
  </script>
<!-- jQuery -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<!-- <script src="dist/js/adminlte.min.js"></script> -->
</body>
</html>
