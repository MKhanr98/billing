<?php
require '_includes/connect.php';

// delete.php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['table'])) {
  $id = $_POST['id'];
  $table = $_POST['table'];

  // Connect to your database
  // ...

  // Prepare the delete statement based on the provided table
  if ($table === 'pkg') {
    $stmt = $connection->prepare("DELETE FROM pkg WHERE id = ?");

  } 
  // elseif ($table === 'cout') {
  //   $stmt = $connection->prepare("DELETE FROM cout WHERE id = ?");
  
  // }  
  // Bind the ID parameter and execute the delete statement
  $stmt->bind_param("i", $id);
  if ($stmt->execute()) {
    echo 'success';
  } else {
    echo 'error';
  }
}
?>
