<?php
// Your database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cash";

// Create a new PDO instance
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Prepare and execute the SQL queries for "cin" and "cout" data separately
$cinQuery = "
    SELECT
        DATE_FORMAT(`date`, '%Y-%m') AS month,
        SUM(cash) AS total_cash_in
    FROM
        cin
    WHERE
        YEAR(`date`) = YEAR(CURDATE())
    GROUP BY
        month
    ORDER BY
        month
";
$cinStmt = $pdo->prepare($cinQuery);
$cinStmt->execute();
$cinData = $cinStmt->fetchAll(PDO::FETCH_ASSOC);

$coutQuery = "
    SELECT
        DATE_FORMAT(`date`, '%Y-%m') AS month,
        -SUM(cash) AS total_cash_out
    FROM
        cout
    WHERE
        YEAR(`date`) = YEAR(CURDATE())
    GROUP BY
        month
    ORDER BY
        month
";
$coutStmt = $pdo->prepare($coutQuery);
$coutStmt->execute();
$coutData = $coutStmt->fetchAll(PDO::FETCH_ASSOC);

// Combine the "cin" and "cout" data
$data = array_merge($cinData, $coutData);

// Return the combined data as JSON
echo json_encode($data);
?>
