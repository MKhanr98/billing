<?php
// allowadata.php
$conn = mysqli_connect("localhost", "root", "", "cash");

$selectedMonth = $_POST['month'];
$selectedYear = $_POST['year'];

// Construct the SQL query to sum the cash column for the selected month and year
$sql = "SELECT SUM(cash) AS totalAmount FROM allowance WHERE MONTH(date) = $selectedMonth AND YEAR(date) = $selectedYear";
$res = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($res)) {
    $totalAmount = $row['totalAmount'];
    echo "<p> Rs $totalAmount</p>";
} else {
    echo "No records found";
}
?>
