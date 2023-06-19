<?php include '_includes/header.php'; ?>
<?php include '_includes/navbar.php'; ?>
<?php include '_includes/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Subscriber Data </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Subscriber Data</li>
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
            
              <!-- /.card-header -->
              <!-- form start -->
              

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
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Package Name</th>
                  <th>Price</th>
                  <th>Duration</th>
                  <th>Sub Date</th>
                  <th>Expiry Date</th>
                  <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>

<?php
$q = mysqli_query($connection, "SELECT subs.id, subs.sub_date, subs.exp_date, subs.pay_method,
user.username, user.email,
pkg.name, pkg.duration, pkg.price
FROM subs
JOIN user ON subs.user_id = user.id
JOIN pkg ON subs.pkg_id = pkg.id;
") or die(mysqli_error($connection));
while($row = mysqli_fetch_array($q))
{
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['duration'] . "</td>";
  echo "<td>" . $row['sub_date'] . "</td>";
  echo "<td>" . $row['exp_date'] . "</td>";



  echo '<td style="text-align:center">
          <a href="edit.php?id='.$row['id'].'&table=subs&page=subsribers.php" class="btn btn-info">
            <i class="fas fa-edit"></i>
          </a>
          <button class="btn btn-danger" onclick="confirmDelete('.$row['id'].', \'subs\')">
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
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Package Name</th>
                  <th>Price</th>
                  <th>Duration</th>
                  <th>Sub Date</th>
                  <th>Expiry Date</th>
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
                table.column(4).search('^' + filterValue + '$', true, false).draw();
            } else {
                table.column(4).search('').draw();
            }
        });
    });
</script>