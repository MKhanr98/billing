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
                            
                              </svg>
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
                            Current Balance
                          </p>
                          <p class="percent">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" fill="currentColor" height="20" width="20">
                                  <path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z">
                                  </path>
                              </svg>
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
                                  
                                  // Check if a new deposit has been made in the 'cout' table
                                  $sql = "SELECT SUM(cash) AS depositedAmount FROM cout";
                                  $res = mysqli_query($conn, $sql);
                                  $row = mysqli_fetch_assoc($res);
                                  $depositedAmount = $row['depositedAmount'];
                                  
                                  // Subtract the deposited amount from the total amount
                                  $totalAmount -= $depositedAmount;
                                  
                                  // Check if a new deposit has been made in the 'personal' table
                                  $sql = "SELECT SUM(cash) AS personalDeposit FROM personal";
                                  $res = mysqli_query($conn, $sql);
                                  $row = mysqli_fetch_assoc($res);
                                  $personalDeposit = $row['personalDeposit'];
                                  
                                  // Subtract the personal deposit amount from the total amount
                                  $totalAmount -= $personalDeposit;
                                  
                                  // Check if a new deposit has been made in the 'personal' table
                                  $sql = "SELECT SUM(cash) AS tripDeposit FROM trip";
                                  $res = mysqli_query($conn, $sql);
                                  $row = mysqli_fetch_assoc($res);
                                  $tripDeposit = $row['tripDeposit'];
                                  
                                  // Subtract the personal deposit amount from the total amount
                                  $totalAmount -= $tripDeposit;

                                  
                                  // Check if a new deposit has been made in the 'allowance' table
                                  $sql = "SELECT SUM(cash) AS allowanceDeposit FROM allowance";
                                  $res = mysqli_query($conn, $sql);
                                  $row = mysqli_fetch_assoc($res);
                                  $allowanceDeposit = $row['allowanceDeposit'];

                                  // Subtract the allowance deposit amount from the total amount
                                  $totalAmount -= $allowanceDeposit;

                                  // Check if a new deposit has been made in the 'training' table
                                  $sql = "SELECT SUM(cash) AS trainingDeposit FROM training";
                                  $res = mysqli_query($conn, $sql);
                                  $row = mysqli_fetch_assoc($res);
                                  $trainingDeposit = $row['trainingDeposit'];

                                  // Subtract the training deposit amount from the total amount
                                  $totalAmount -= $trainingDeposit;
                                  

                          
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

<!--MONTHLY withdraw -->

    <div class="col-lg-3 col-6">
    <!-- small box -->
    
    <div class="card">
        <div class="title withdrawcolor">
        <span>
                  <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                   <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                    </path>
                    </svg>
        </span>
            <p class="title-text">
                Monthly Withdraw
            </p>
            <input type="month" id="monthYearInput2" onchange="updateData2()" style=" margin-left: 10px;width: 25px;" />
        </div>
        <div class="data">
            
                <div id="totalAmount2" ></div>

                <div class="range">
                <div class="fill1">
                </div>
                </div>
        </div>
    </div>
</div>
 <!-- ./col -->
        </div>
        <br>
        

        <h3 class="mb-1">Withdraw</h3><br>
        
        
        <div class="row">
        <!-------------------------------------project withdraw  ---------------------------------------------------------------->
 <!-- TOTAL withdraw card -->

 <div class="col-lg-3 col-6">
    <!-- small box -->
    
    <div class="card">
        <div class="title withdrawcolor">
        <span>
                  <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                   <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                    </path>
                    </svg>
        </span>
            <p class="title-text">
            Other Expenses
            </p>
            <input type="month" id="monthYearInput7" onchange="updateData7()" style="
    margin-left: 10px;
    width: 25px;
" />
        </div>
        <div class="data">
            
            <div id="totalAmount7" ></div>
            
                <div class="range">
                <div class="fill1">
                </div>
                </div>
        </div>
    </div>
</div>
          <!-- ./col -->

 <!-- ---------------------------------------------------PERSONAL WIDGET ---------------------------------------------------------------------------->

    <div class="col-lg-3 col-6">
    <!-- small box -->
    
    <div class="card">
        <div class="title withdrawcolor">
        <span>
                  <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                   <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                    </path>
                    </svg>
        </span>
            <p class="title-text">
                Dr.Gul Muhammad
            </p>
            <input type="month" id="monthYearInput3" onchange="updateData3()" style="
    margin-left: 10px;
    width: 25px;
" />
        </div>
        <div class="data">
            
            <div id="totalAmount3" ></div>
            
            <div class="range">
                <div class="fill1">
                </div>
                </div>
        </div>
    </div>
</div>

 <!-- ./col -->

<!-- -------------------------------------------------------------Trips ---------------------------------------------------------->

    <div class="col-lg-3 col-6">
    <!-- small box -->
    
    <div class="card">
        <div class="title withdrawcolor">
        <span>
                  <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                   <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                    </path>
                    </svg>
        </span>
            <p class="title-text">
                Trips
            </p>
            <input type="month" id="monthYearInput4" onchange="updateData4()" style="
    margin-left: 10px;
    width: 25px;
" />
        </div>
        <div class="data">
            
            <div id="totalAmount4" ></div>
            
            <div class="range">
                <div class="fill1">
                </div>
                </div>
        </div>
    </div>
</div>


          <!-- ./col -->

          
<!-- -------------------------------------------------------------Allowance ---------------------------------------------------------->

    <div class="col-lg-3 col-6">
    <!-- small box -->
    
    <div class="card">
        <div class="title withdrawcolor">
        <span>
                  <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                   <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                    </path>
                    </svg>
        </span>
            <p class="title-text">
                Allowance
            </p>
            <input type="month" id="monthYearInput5" onchange="updateData5()" style="
    margin-left: 10px;
    width: 25px;
" />
        </div>
        <div class="data">
            
            <div id="totalAmount5" ></div>
            
            <div class="range">
                <div class="fill1">
                </div>
                </div>
        </div>
    </div>
</div>


          <!-- ./col -->

          
<!-- -------------------------------------------------------------Expenditure ---------------------------------------------------------->

    <div class="col-lg-3 col-6">
    <!-- small box -->
    
    <div class="card">
        <div class="title withdrawcolor">
        <span>
                  <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                   <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                    </path>
                    </svg>
        </span>
            <p class="title-text">
                Training Expenditure
            </p>
            <input type="month" id="monthYearInput6" onchange="updateData6()" style="
    margin-left: 10px;
    width: 25px;
" />
        </div>
        <div class="data">
            
            <div id="totalAmount6" ></div>
            
            <div class="range">
                <div class="fill1">
                </div>
                </div>
        </div>
    </div>
</div>
    
          <!-- ./col -->

</div>
        <!-- /.row -->
<!-- ------------------------------------------------------------------------------------------------------------- --------->
<!-- code fot chatrts -->
<!-- -------------------------------------------------------------------------------------------------------------------------------- -->

<!-- 
<div class="row">
<canvas id="myChart" style="margin-top:25px;"></canvas>
</div>


<script>
fetch('chart.php')
    .then(response => response.json())
    .then(data => {
        const cinData = data.filter(item => item.total_cash_in >= 0);
        const coutData = data.filter(item => item.total_cash_out < 0);

        const monthOptions = { month: 'short', year: '2-digit' };

        const combinedLabels = [...new Set([...cinData, ...coutData].map(item => new Date(item.month + '-01').toLocaleString('en-US', monthOptions)))];

        const cinDataset = {
            label: 'Total Deposit',
            data: cinData.map(item => item.total_cash_in),
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        };

        const coutDataset = {
            label: 'Total Withdraw',
            data: coutData.map(item => -item.total_cash_out), // Use negative sign (-) for cout data
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        };

        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: combinedLabels,
                datasets: [cinDataset, coutDataset]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Monthly Data'
                    }
                },
                scales: {
                    x: {
                        stacked: false,
                    },
                    y: {
                        stacked: false
                    }
                }
            }
        });
    });

  </script> -->






<!--  ---------------------------------------------------------------------------------------------------------------------------------->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
 
<?php include '_includes/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>



    //Monthly Withdraw....
    $(document).ready(function() {
        updateData2(); // Fetch and display the data for the current month when the page loads
    });

    function updateData2() {
        let selectedDate = $('#monthYearInput2').val();
        let selectedMonth = selectedDate.split('-')[1];
        let selectedYear = selectedDate.split('-')[0];

        if (!selectedMonth || !selectedYear) {
            let currentDate = new Date();
            selectedMonth = ('0' + (currentDate.getMonth() + 1)).slice(-2); // Get current month
            selectedYear = currentDate.getFullYear(); // Get current year
            let formattedDate = selectedYear + '-' + selectedMonth;
            $('#monthYearInput2').val(formattedDate); // Set the input field to the current month and year
        }

        $.ajax({
            url: 'data/data_monthwithdraw.php', // PHP script to fetch the data based on the selected month and year
            method: 'POST',
            data: { month: selectedMonth, year: selectedYear },
            success: function(response) {
                $('#totalAmount2').html(response);
            },
            error: function() {
                $('#totalAmount2').html('No records found');
            }
        });
    }

//Project Withdraw....
$(document).ready(function() {
        updateData7(); // Fetch and display the data for the current month when the page loads
    });

    function updateData7() {
        let selectedDate = $('#monthYearInput7').val();
        let selectedMonth = selectedDate.split('-')[1];
        let selectedYear = selectedDate.split('-')[0];

        if (!selectedMonth || !selectedYear) {
            let currentDate = new Date();
            selectedMonth = ('0' + (currentDate.getMonth() + 1)).slice(-2); // Get current month
            selectedYear = currentDate.getFullYear(); // Get current year
            let formattedDate = selectedYear + '-' + selectedMonth;
            $('#monthYearInput7').val(formattedDate); // Set the input field to the current month and year
        }

        $.ajax({
            url: 'data/data_otherexpense.php', // PHP script to fetch the data based on the selected month and year
            method: 'POST',
            data: { month: selectedMonth, year: selectedYear },
            success: function(response) {
                $('#totalAmount7').html(response);
            },
            error: function() {
                $('#totalAmount7').html('No records found');
            }
        });
    }

//Personal data
    $(document).ready(function() {
        updateData3(); // Fetch and display the data for the current month when the page loads
    });

    function updateData3() {
        let selectedDate = $('#monthYearInput3').val();
        let selectedMonth = selectedDate.split('-')[1];
        let selectedYear = selectedDate.split('-')[0];

        if (!selectedMonth || !selectedYear) {
            let currentDate = new Date();
            selectedMonth = ('0' + (currentDate.getMonth() + 1)).slice(-2); // Get current month
            selectedYear = currentDate.getFullYear(); // Get current year
            let formattedDate = selectedYear + '-' + selectedMonth;
            $('#monthYearInput3').val(formattedDate); // Set the input field to the current month and year
        }

        $.ajax({
            url: 'data/data_personalwithdraw.php', // PHP script to fetch the data based on the selected month and year
            method: 'POST',
            data: { month: selectedMonth, year: selectedYear },
            success: function(response) {
                $('#totalAmount3').html(response);
            },
            error: function() {
                $('#totalAmount3').html('No records found');
            }
        });
    }

//Trips

$(document).ready(function() {
        updateData4(); // Fetch and display the data for the current month when the page loads
    });

    function updateData4() {
        let selectedDate = $('#monthYearInput4').val();
        let selectedMonth = selectedDate.split('-')[1];
        let selectedYear = selectedDate.split('-')[0];

        if (!selectedMonth || !selectedYear) {
            let currentDate = new Date();
            selectedMonth = ('0' + (currentDate.getMonth() + 1)).slice(-2); // Get current month
            selectedYear = currentDate.getFullYear(); // Get current year
            let formattedDate = selectedYear + '-' + selectedMonth;
            $('#monthYearInput4').val(formattedDate); // Set the input field to the current month and year
        }

        $.ajax({
            url: 'data/data_trip.php', // PHP script to fetch the data based on the selected month and year
            method: 'POST',
            data: { month: selectedMonth, year: selectedYear },
            success: function(response) {
                $('#totalAmount4').html(response);
            },
            error: function() {
                $('#totalAmount4').html('No records found');
            }
        });
    }


//Allowance

$(document).ready(function() {
        updateData5(); // Fetch and display the data for the current month when the page loads
    });

    function updateData5() {
        let selectedDate = $('#monthYearInput5').val();
        let selectedMonth = selectedDate.split('-')[1];
        let selectedYear = selectedDate.split('-')[0];

        if (!selectedMonth || !selectedYear) {
            let currentDate = new Date();
            selectedMonth = ('0' + (currentDate.getMonth() + 1)).slice(-2); // Get current month
            selectedYear = currentDate.getFullYear(); // Get current year
            let formattedDate = selectedYear + '-' + selectedMonth;
            $('#monthYearInput5').val(formattedDate); // Set the input field to the current month and year
        }

        $.ajax({
            url: 'data/data_allowance.php', // PHP script to fetch the data based on the selected month and year
            method: 'POST',
            data: { month: selectedMonth, year: selectedYear },
            success: function(response) {
                $('#totalAmount5').html(response);
            },
            error: function() {
                $('#totalAmount5').html('No records found');
            }
        });
    }


//Training 

$(document).ready(function() {
        updateData6(); // Fetch and display the data for the current month when the page loads
    });

    function updateData6() {
        let selectedDate = $('#monthYearInput6').val();
        let selectedMonth = selectedDate.split('-')[1];
        let selectedYear = selectedDate.split('-')[0];

        if (!selectedMonth || !selectedYear) {
            let currentDate = new Date();
            selectedMonth = ('0' + (currentDate.getMonth() + 1)).slice(-2); // Get current month
            selectedYear = currentDate.getFullYear(); // Get current year
            let formattedDate = selectedYear + '-' + selectedMonth;
            $('#monthYearInput6').val(formattedDate); // Set the input field to the current month and year
        }

        $.ajax({
            url: 'data/data_training.php', // PHP script to fetch the data based on the selected month and year
            method: 'POST',
            data: { month: selectedMonth, year: selectedYear },
            success: function(response) {
                $('#totalAmount6').html(response);
            },
            error: function() {
                $('#totalAmount6').html('No records found');
            }
        });
    }
</script>
