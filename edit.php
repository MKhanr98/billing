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

if($_POST) {
  $cash = $_POST['cash'];
  $person = $_POST['person'];
  $date = $_POST['date'];
  $description = $_POST['description'];
  
  $stmt = $connection->prepare("UPDATE $table SET cash=?, person=?, description=?, date=? WHERE id=?");

  $stmt->bind_param("isssi", $cash, $person, $description, $date, $id);

  if ($stmt->execute()) {
    echo "<script>alert('Record Updated');</script>";
    session_abort();
  } else {
    echo "<script>alert('Failed to update record');</script>";
  }

  header("Location: $page");
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
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                    <label for="cash">Cash Amount</label>
                    <input type="number" class="form-control" id="cash" name="cash" placeholder="Enter amount" value="<?php echo $row['cash']; ?>" required>
                  </div>

                  <?php if ($page == 'cashin.php') : ?>
                    <div class="form-group col-md-6">
                      <label for="cheque">Cheque No</label>
                      <input type="text" class="form-control" id="cheque" name="cheque" placeholder="Cheque No" value="<?php echo $row['cheque']; ?>" required>
                    </div>
                  <?php endif; ?>

                  <div class="form-group col-md-6">
  <label for="person">Person</label>
  <?php if ($table === 'personal'): ?>
    <?php
    $readonly = ($table === 'personal') ? 'readonly' : '';
    ?>
    <input type="text" class="form-control" name="person" value="Dr. Gul Muhammad" <?php echo $readonly; ?>>
  <?php else: ?>
    <select class="form-control select2" name="person" style="width:100%" required>
      <?php
      $sub_sql = "SELECT id, name FROM person";
      $sub_result = mysqli_query($connection, $sub_sql);

      while ($srow = mysqli_fetch_assoc($sub_result)) {
        $selected = ($srow['name'] == $row['person']) ? 'selected' : '';
        echo "<option value='" . $srow['name'] . "' $selected>" . $srow['name'] . "</option>";
      }
      ?>
    </select>
  <?php endif; ?>
</div>


                  
                  <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?php echo $row['date']; ?>" required>
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
