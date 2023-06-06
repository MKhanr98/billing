
<?php
//prowithdraw.php
                                $conn = mysqli_connect("localhost", "root", "", "cash");
                                $selectedMonth = $_POST['month'];
                                $selectedYear = $_POST['year'];
                                $sql = "SELECT SUM(cash) AS totalAmount FROM cout WHERE MONTH(date) = $selectedMonth AND YEAR(date) = $selectedYear"; // Calculate the sum of the 'cash' column
                                $res = mysqli_query($conn, $sql);

                                if ($row = mysqli_fetch_assoc($res)) {
                                $totalAmount = $row['totalAmount'];
                                echo "<p>Rs $totalAmount</p>";
                                  } else {
                                          echo "No record Found";
                                        }
?>
                        


