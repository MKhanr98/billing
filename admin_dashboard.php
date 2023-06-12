<?php include '_includes/header.php'; ?>
<?php include '_includes/navbar.php'; ?>
<?php include '_includes/sidebar.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </div> <!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


<!-- ------------------------------------------------------------------------------------------------------------------------------ -->


<style>
  .card {
  padding: 1rem;
  background-color: #fff;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  max-width: 320px;
  border-radius: 20px;
}

.title {
  display: flex;
  align-items: center;
}

.title span {
  position: relative;
  padding: 0.5rem;
  background-color: #10B981;
  width: 1.5rem;
  height: 1.5rem;
  border-radius: 9999px;
}

/* .depositcolor {
background-color: #10B981;

} */
.withdrawcolor span{
background-color: red;

}

.title span svg {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #ffffff;
  height: 1rem;
}

.title-text {
  margin-top: 10px;
  margin-left: 0.5rem;
  color: #374151;
  font-size: 18px;
}

.percent {
  margin-top: 10px;
  margin-left: 0.5rem;
  color: #02972f;
  font-weight: 600;
  display: flex;
}

.percent1 {
  margin-top: 10px;
  margin-left: 0.5rem;
  color: red;
  font-weight: 600;
  display: flex;
}

.data {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}

.data p {
  margin-top: 1rem;
  margin-bottom: 1rem;
  color: #1F2937;
  font-size: 2.25rem;
  line-height: 2.5rem;
  font-weight: 700;
  text-align: left;
}

.data .range {
  position: relative;
  background-color: #E5E7EB;
  width: 100%;
  height: 0.5rem;
  border-radius: 0.25rem;
}

.data .range .fill {
  position: absolute;
  top: 0;
  left: 0;
  background-color: #10B981;
  width: 100%;
  height: 100%;
  border-radius: 0.25rem;
}

.fill1 {
  position: absolute;
  top: 0;
  left: 0;
  background-color: red;
  width: 100%;
  height: 100%;
  border-radius: 0.25rem;
}
</style>



<!--  -->
<!-- Small boxes (Stat box) -->
        <div class="row">

          <!-- current AMOUNT -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            
                  <div class="card">
                      <div class="title">
                          <span>
                              <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                                  </path>
                              </svg>
                          </span>
                          <p class="title-text">
                            Total Amount Deposited
                          </p>
                          <p class="percent">
                            
                              <!-- </svg> -->
                          </p>
                      </div>
                      <div class="data">

                                  <?php
                                  $conn = mysqli_connect("localhost", "root", "", "cash");
                                  // Calculate the initial total amount from the 'cin' table
                                  $sql = "SELECT SUM(cash) AS totalAmount FROM cin";
                                  $res = mysqli_query($conn, $sql);
                                  $row = mysqli_fetch_assoc($res);
                                  $totalAmount = $row['totalAmount'];
                                  echo "<p> Rs $totalAmount</p>";
                                  ?>
        <div class="range">
            <div class="fill">
            </div>
        </div>

                      </div>
                </div>
          </div>
          <!-- ./col -->


    


          
<!-- ------------------------MONTHLY DEPOSIT ------------------- -->
    <div class="col-lg-3 col-6">
    <!-- small box -->
    
    <div class="card">
        <div class="title">
        <span>
                  <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                   <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                    </path>
                    </svg>
        </span>
            <p class="title-text">
                Monthly Deposit
            </p>
            <input type="month" id="monthYearInput" onchange="updateData()" style="
    margin-left: 10px;
    width: 25px;
" />
        </div>
        <div class="data">
            
            <div id="totalAmount" ></div>
            
        <div class="range">
            <div class="fill">
            </div>
        </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    //Monthly Deposit//
    $(document).ready(function() {
        updateData(); // Fetch and display the data for the current month when the page loads
    });

    function updateData() {
        let selectedDate = $('#monthYearInput').val();
        let selectedMonth = selectedDate.split('-')[1];
        let selectedYear = selectedDate.split('-')[0];

        if (!selectedMonth || !selectedYear) {
            let currentDate = new Date();
            selectedMonth = ('0' + (currentDate.getMonth() + 1)).slice(-2); // Get current month
            selectedYear = currentDate.getFullYear(); // Get current year
            let formattedDate = selectedYear + '-' + selectedMonth;
            $('#monthYearInput').val(formattedDate); // Set the input field to the current month and year
        }

        $.ajax({
            url: 'data/data_mdeposit.php', // PHP script to fetch the data based on the selected month and year
            method: 'POST',
            data: { month: selectedMonth, year: selectedYear },
            success: function(response) {
                $('#totalAmount').html(response);
            },
            error: function() {
                $('#totalAmount').html('No records found');
            }
        });
    }
</script>
          <!-- ./col -->



</div>
        <!-- /.row -->



<!--  ---------------------------------------------------------------------------------------------------------------------------------->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
 
<?php include '_includes/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

