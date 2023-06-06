<?php
// mwithdraw.php
$conn = mysqli_connect("localhost", "root", "", "cash");

$selectedMonth = $_POST['month'];
$selectedYear = $_POST['year'];

// Construct the SQL query to sum the cash column for the selected month and year
$sql = "
    SELECT SUM(c) AS totalAmount FROM (
    SELECT SUM(cash) as c FROM allowance WHERE MONTH(date) = $selectedMonth AND YEAR(date) = $selectedYear
    UNION ALL
    SELECT SUM(cash) as c FROM cout WHERE MONTH(date) = $selectedMonth AND YEAR(date) = $selectedYear
    UNION ALL
    SELECT SUM(cash) as c FROM personal WHERE MONTH(date) = $selectedMonth AND YEAR(date) = $selectedYear
    UNION ALL
    SELECT SUM(cash) as c FROM training WHERE MONTH(date) = $selectedMonth AND YEAR(date) = $selectedYear
    UNION ALL
    SELECT SUM(cash) as c FROM trip WHERE MONTH(date) = $selectedMonth AND YEAR(date) = $selectedYear)
     AS cash_entries
";
$res = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($res)) {
    $totalAmount = $row['totalAmount'];
    echo "<p> Rs $totalAmount</p>";
} else {
    echo "No records found";
}
?>
