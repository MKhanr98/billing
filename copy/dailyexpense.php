<?php include '_includes/header.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST["datepicker"];

    try {
        $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT DATE(date) AS date, SUM(cash) AS total_cash
                FROM (
                    SELECT cash, date FROM cout
                    UNION ALL
                    SELECT cash, date FROM allowance
                    UNION ALL
                    SELECT cash, date FROM personal
                    UNION ALL
                    SELECT cash, date FROM training
                    UNION ALL
                    SELECT cash, date FROM trip
                ) AS combined_tables
                WHERE DATE_FORMAT(date, '%Y-%m') = :date
                GROUP BY DATE(date)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':date', $date);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
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
                    <h1 class="m-0">Daily Expenses</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Daily Expenses</li>
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
                                        <label for="datepicker">Date</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="datepicker" name="datepicker" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="calendarButton">
                                                    <i class="fa fa-calendar"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <small id="dateHelp" class="form-text text-muted">Please select a date.</small>
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
                                     <table id="example4" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Cash Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                        if (isset($result) && is_array($result) && count($result) > 0) {
                            foreach ($result as $row) {
                                echo '<tr>';
                                echo '<td>' . date('d F Y', strtotime($row['date'])) . '</td>';
                                echo '<td>' . $row['total_cash'] . '</td>';
                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
                            <tfoot>
                                <tr>
                                    <th>Date</th>
                                    <th>Cash Amount</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

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
    $(document).ready(function () {
        // Initialize datepicker
        $('#datepicker').datepicker({
            format: 'yyyy-mm',
            viewMode: 'months',
            minViewMode: 'months',
            autoclose: true,
            showOnFocus: false, // Prevent the datepicker from showing when input field is focused
            beforeShow: function (input, inst) {
                // Calculate the position of the calendar icon
                var iconOffset = $('#calendarButton').offset();
                var iconHeight = $('#calendarButton').outerHeight();

                // Calculate the position of the calendar popup
                var popupTop = iconOffset.top + iconHeight + 10;
                var popupLeft = iconOffset.left;

                // Set the position of the calendar popup
                inst.dpDiv.css({
                    top: popupTop,
                    left: popupLeft
                });
            }
        });

        // Open the datepicker when clicking on the calendar button
        $('#calendarButton').click(function () {
            $('#datepicker').datepicker('show');
        });

        // Initialize DataTable
        $('#example4').DataTable({
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]], // Set length options
            pageLength: 30, // Set default page length
            searching: true, // Enable search functionality
            paging: true, // Enable pagination
            ordering: true, // Enable sorting
            info: true, // Enable table information
            responsive: true, // Enable responsive mode
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
            ] // Add the download buttons
        }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
    });
</script>

<!-- Datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">


<!-- jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<!-- Bootstrap 4 -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

<!-- Datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<!-- DataTables Buttons -->
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
<!-- DataTables Buttons -->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css"> -->
