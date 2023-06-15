<?php
include '_includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $cnic = $_POST['cnic'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];

    $stmt = $connection->prepare("INSERT INTO user (username, name, cnic, email, password, phone) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $name, $cnic, $email, $pass, $phone);

    if ($stmt->execute()) {
        echo "<script>alert('Registration Successful');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
        exit;
    } else {
        echo "<script>alert('Registration Failed');</script>";
    }
}
?>

 <!-- #region -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MS Electrical</title>
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

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-body">

      <form role='form'method="post">

      <div class="form-group">
                <label for="username">User Name</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-solid fa-id-card"></i></span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter User ID">
                </div>
                </div>

        
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class=" fas fa-solid fa-signature"></i></span>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" required>
                  </div>
                </div>

                <div class="form-group">
                    <label for="cnic">CNIC</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class=" fas fa-solid fa-id-card"></i></span>
                    </div>
                    <input type="text" class="form-control" id="cnic" name="cnic" placeholder="99999-9999999-9" 
                    pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" required>
                  </div>
                  </div>
                  <script>
                    var cnicInput = document.getElementById('cnic');
                    cnicInput.addEventListener('input', function() {
                      var cnicValue = cnicInput.value.replace(/[^0-9]/g, '');
                      var formattedCnic = cnicValue.slice(0, 5) + '-' + cnicValue.slice(5, 12) + '-' + cnicValue.slice(12, 13);
                      cnicInput.value = formattedCnic;
                    });
                  </script>

                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-solid fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                  </div></div>

                  <div class="form-group">
                    <label for="pass">Password</label>
                    <div class="input-group">
                    <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-eye toggle-password" onclick="togglePassword()"></span>
                    </div>
                    </div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                    </div>
                </div>
                  
                <div class="form-group">
                    <label for="phone">Phone No</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class=" fas fa-solid fa-phone"></i></span>
                    </div>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone No" required>
                  </div></div>
                  <script>
                    var phoneInput = document.getElementById('phone');
                    phoneInput.addEventListener('input', function() {
                      var phoneValue = phoneInput.value.replace(/[^0-9]/g, '');
                      phoneInput.value = phoneValue;
                    });
                  </script>

     

      <div class="social-auth-links text-center mt-2 mb-3">
        <button type="submit" href="#" class="btn btn-block btn-primary"> Register </button>
         </form>
        
      </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<script>
    function togglePassword() {
      var passwordField = document.getElementById("password");
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
