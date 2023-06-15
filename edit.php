<?php include '_includes/header.php';
$page = $_GET['page'];
$id = $_GET['id'];
$table = $_GET['table']; // Assuming you pass the table name as a query parameter
$sql = "SELECT * FROM $table WHERE id = $id";
$result = mysqli_query($connection, $sql);

if (!$result) {
  die("Database query failed: " . mysqli_error($connection));
}

$row = mysqli_fetch_array($result);

if (!$row) {
  die("Data not found.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $admin_id = $_SESSION['id'];
  $name = $_POST['name'];
  $price = (int)$_POST['price'];
  $duration = $_POST['duration'];
  $description = $_POST['description'];

  // Prepare the update statement
  $stmt = $connection->prepare("UPDATE pkg SET name = ?, price = ?, duration = ?, description = ?, admin_id = ? WHERE id = ?");
  $stmt->bind_param("sdisii", $name, $price, $duration, $description, $admin_id, $id);

  // Execute the update statement
  if ($stmt->execute()) {
    echo "<script>alert('Record Updated');</script>";
    // Redirect back to the original page
    header("Location: $page");
    exit;
  } else {
    echo "<script>alert('Failed to update record');</script>";
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
            <h1 class="m-0">Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

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
              <form role='form' method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                  
                  <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo $row['name']; ?>" required>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" value="<?php echo $row['price']; ?>" required>
                  </div>
                  
                  <style>
                  .select2-container .select2-selection--single {
                  height: 38px;
                }
                </style>
                  <div class="form-group col-md-6">
                    <label for="duration">Duration</label>
                    <select class="form-control" id="duration" name="duration" required>
                      <option value="1" <?php if ($row['duration'] == 1) echo 'selected'; ?>>1 day</option>
                      <option value="3" <?php if ($row['duration'] == 2) echo 'selected'; ?>>3 days</option>
                      <option value="7" <?php if ($row['duration'] == 7) echo 'selected'; ?>>7 days</option>
                      <option value="30" <?php if ($row['duration'] == 30) echo 'selected'; ?>>30 days</option>
                    </select>
                  </div>


                  <div class="form-group col-md-12">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description" ><?php echo $row['description']; ?></textarea>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include '_includes/footer.php'; ?>
