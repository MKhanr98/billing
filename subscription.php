<?php
// Include the database connection file
include '_includes/connect.php';

// Check if the AJAX request data is received
if (isset($_POST['user_id'], $_POST['pkg_id'], $_POST['paymentMethod'])) {
    $user_id = $_POST['user_id'];
    $pkg_id = $_POST['pkg_id'];
    $paymentMethod = $_POST['paymentMethod'];
  
    $pkg = "SELECT duration FROM pkg WHERE id = $pkg_id";
    $query = mysqli_query($connection, $pkg);
    if ($query) {
      $pkg_row = mysqli_fetch_assoc($query);
      $duration = $pkg_row['duration'];

      // Set the timezone to your desired value
      date_default_timezone_set('Asia/Karachi');
      // Create current datetime
      $currentdatetime = date('Y-m-d H:i:s');
      // Calculate expiration datetime
      $expdatetime = date('Y-m-d H:i:s', strtotime($currentdatetime . " + $duration days"));
  
    } else {
      // Handle the query error
      echo "Error executing the package duration query: " . mysqli_error($connection);
    }

    // Prepare the SQL statement to insert the subscription data into the "subs" table
    $sql = "INSERT INTO subs (pkg_id, sub_date, exp_date, pay_method, user_id) 
            VALUES ('$pkg_id', '$currentdatetime', '$expdatetime', '$paymentMethod', '$user_id')";
    
    // Execute the SQL statement
    if (mysqli_query($connection, $sql)) {
        // Return success response
        echo 'success';
    } else {
        // Return error response
        echo 'error';
    }
}
?>