<?php
require '_includes/connect.php';
// require '_includes/header.php';

if($_POST)
{
    $uid = $_POST['uid'];
    $name = $_POST['name'];
    $cnic = $_POST['cnic'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];


    $stmt = $connection->prepare("INSERT INTO register (uid, name, cnic, email, pass, phone) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $uid, $name, $cnic, $email, $pass, $phone);
    
  $stmt->execute();
  
  if($stmt->affected_rows > 0)
  {
    echo "<script>alert('Registration Successful ');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
    exit;
  }
}
?>
<!--_______________________________________ -->


<div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role='form'method="post">
                <div class="card-body">

                <div class="form-group">
                <label for="uid">User ID</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-solid fa-id-card"></i></span>
                </div>
                <input type="text" class="form-control" id="uid" name="uid" placeholder="Enter User ID">
                </div>
                </div>

                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class=" fas fa-solid fa-signature"></i></span>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name">
                  </div></div>

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
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                  </div></div>

                  <div class="form-group">
                    <label for="pass">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-solid fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password">
                    </div>
                </div>
                  
                  

                  <div class="form-group">
                    <label for="phone">Phone No</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class=" fas fa-solid fa-phone"></i></span>
                    </div>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone No">
                  </div></div>
                  <script>
                    var phoneInput = document.getElementById('phone');
                    phoneInput.addEventListener('input', function() {
                      var phoneValue = phoneInput.value.replace(/[^0-9]/g, '');
                      phoneInput.value = phoneValue;
                    });
                  </script>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
<!-- _________________________________________________________________________ -->
      </div>
    <!-- /.container-fluid -->
    </section>
    </div>
  <!-- /.content-wrapper -->

 

