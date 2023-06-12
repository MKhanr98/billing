<?php include '_includes/header.php'; ?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $name = $_POST['name'];

  

//   if(isset($_SESSION['id'])) {
//     $Admin_Id = $_SESSION['id'];
//   }

  $stmt = $connection->prepare("INSERT INTO person (name) 
  VALUES (?)");

  $stmt->bind_param("s", $name );
 

  if ($stmt->execute()) {
    echo "<script>alert('Record Added');</script>";
    session_abort();
  } else {
    echo "<script>alert('Failed to add record');</script>";
  }
}
?>
<?php include '_includes/navbar.php'; ?>
<?php include '_includes/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Person 
</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
<!-- _________________________________________________________________________ -->       

<div class="row">
          <!-- left column -->
          <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role='form' method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">

                  <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                  </div>

              
                
                
                </div>
                <!-- /.card-body -->
              </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-12">

      <!-- table card start -->
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>

                  <?php 
                
                  ?>


                  <?php
                  $q = mysqli_query($connection, "select * from person") or die(mysqli_error($connection));
                  while($row = mysqli_fetch_array($q))
                  {
                    echo"<tr>";
                    echo "<td>".ucfirst($row['name'])."</td>";

                     
                    echo '<td style="text-align:center">

  <button class="btn btn-danger" onclick="confirmDelete('.$row['id'].', \'person\')">
  <i class="fas fa-trash"></i>
</button>
</td>';

echo "</tr>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmDelete(id, table) {
Swal.fire({
title: 'Are you sure?',
text: "You won't be able to revert this!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, delete it!'
}).then((result) => {
if (result.isConfirmed) {
// Make an AJAX request to delete.php
$.ajax({
url: 'delete.php',
type: 'POST',
data: { id: id, table: table },
success: function(response) {
if (response === 'success') {
Swal.fire('Deleted!', 'The record has been deleted.', 'success');
// Refresh the table
window.location.replace("person.php");
} else {
Swal.fire('Error!', 'Failed to delete the record.', 'error');
}
},
error: function() {
Swal.fire('Error!', 'An error occurred while deleting the record.', 'error');
}
});
}
});
}
</script>

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Name</th>
            
                  <th>Action</th>
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

<!-- _________________________________________________________________________ -->

      </div>
    <!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
<?php include '_includes/table_footer.php'; ?>
