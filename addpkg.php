<?php include '_includes/header.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_SESSION['id'];
  $name = $_POST['name'];
  $price = (int)$_POST['price'];
  $duration = $_POST['duration'];
  $description = $_POST['description'];
  
  $stmt = $connection->prepare("INSERT INTO pkg (name, price, duration, description, admin_id) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sdisi", $name, $price, $duration, $description, $id);
  
  if ($stmt->execute()) {
    echo "<script>alert('Record Added');</script>";
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
            <h1 class="m-0">Package </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Package Data</li>
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
                  <label for="name">Package Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                  </div>

                  <div class="form-group col-md-6">
                  <label for="price">Price</label>
                  <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" required>
                  </div>

                              
                <style>
                  .select2-container .select2-selection--single {
                  height: 38px;
                }
                </style>

                
                <!-- /.form-group -->
              <!-- </div> -->

              <div class="form-group col-md-6">
                <label for="duration">Duration</label>
                <select class="form-control" id="duration" name="duration" required>
                  <option value="1">1 day</option>
                  <option value="3">3 days</option>
                  <option value="7">7 days</option>
                  <option value="30">30 days</option>
                </select>
              </div>
  
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
        <div class="form-group">
            <label for="filter-duration">Filter by Duration:</label>
            <select class="form-control" id="filter-duration" name="filter-duration">
                <option value="">All</option>
                <option value="1">1 day</option>
                <option value="3">3 days</option>
                <option value="7">7 days</option>
                <option value="30">30 days</option>
            </select>
        </div>
    </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Package Name </th>
                  <th>Price</th>
                  <th>Duration</th>
                  <th>Description</th>
                  <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>


                  <?php
$q = mysqli_query($connection, "SELECT * FROM pkg") or die(mysqli_error($connection));
while($row = mysqli_fetch_array($q))
{
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['duration'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";

  echo '<td style="text-align:center">
          <a href="edit.php?id='.$row['id'].'&table=pkg&page=addpkg.php" class="btn btn-info">
            <i class="fas fa-edit"></i>
          </a>
          <button class="btn btn-danger" onclick="confirmDelete('.$row['id'].', \'pkg\')">
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
        window.location.replace("addpkg.php");
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
                  <th>Package Name </th>
                  <th>Price</th>
                  <th>Duration</th>
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
<script>
    $(document).ready(function() {
        // Initialize DataTable
        var table = $('#example1').DataTable();

        // Apply filter when the select box value changes
        $('#filter-duration').change(function() {
            var filterValue = $(this).val();

            if (filterValue !== '') {
                table.column(2).search('^' + filterValue + '$', true, false).draw();
            } else {
                table.column(2).search('').draw();
            }
        });
    });
</script>