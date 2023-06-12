<?php include '_includes/header.php'; ?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $cash = $_POST['cash'];
  $person = $_POST['person'];
  $date = $_POST['date'];
  $description = $_POST['description'];
  

//   if(isset($_SESSION['id'])) {
//     $Admin_Id = $_SESSION['id'];
//   }

  $stmt = $connection->prepare("INSERT INTO personal (cash, person, date ,description) 
  VALUES (?, ?, ? ,?)");

  $stmt->bind_param("isss", $cash, $person, $date,$description );
 

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
            <h1 class="m-0">Dr.Gull's Deposit </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Deposit Data</li>
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
                  <label for="cash">Cash Amount</label>
                  <input type="number" class="form-control" id="cash" name="cash" placeholder="Enter amount" required>
                  </div>

                
  <style>
    .select2-container .select2-selection--single {
    
    height: 38px;
    
}
  </style>
                <div class="form-group col-md-6">
  <label for="person">Person</label>
  <input type="text" class="form-control" name="person" value="Dr. Gul Muhammad" readonly>
</div>

<div class="form-group col-md-6">
                  <label for="date">Date</label>
                  <input type="date" class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" required>
                  <small id="dateHelp" class="form-text text-muted">Please select a date.</small>
              </div>

                <!-- /.form-group -->
              <!-- </div> -->

                <div class="form-group col-md-6">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="......." rows="4"></textarea>
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
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Cash Amount</th>
                    <th>Person</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>

                  <?php 
                
                  ?>


<?php
$q = mysqli_query($connection, "SELECT * FROM personal") or die(mysqli_error($connection));
while ($row = mysqli_fetch_array($q)) {
  echo "<tr>";
  echo "<td>" . $row['cash'] . "</td>";
  echo "<td>".ucfirst($row['person'])."</td>";
  echo "<td>{$row['date']}</td>";
  echo "<td>{$row['description']}</td>";

  echo '<td style="text-align:center">
          <a href="edit.php?id=' . $row['id'] . '&table=personal&page=personal.php&name=' . urlencode($row['person']) . '" class="btn btn-info">
            <i class="fas fa-edit"></i>
          </a>
          <button class="btn btn-danger" onclick="confirmDelete(' . $row['id'] . ', \'personal\')">
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
        window.location.replace("personal.php");
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
                  <th>Cash Amount</th>
                  <th>Person</th>
                  <th>Date</th>
                  <th>Description</th>
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
