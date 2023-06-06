<?php
require '_includes/connect.php';

// delete.php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['table'])) {
  $id = $_POST['id'];
  $table = $_POST['table'];

  // Connect to your database
  // ...

  // Prepare the delete statement based on the provided table
  if ($table === 'cin') {
    $stmt = $connection->prepare("DELETE FROM cin WHERE id = ?");

  } elseif ($table === 'cout') {
    $stmt = $connection->prepare("DELETE FROM cout WHERE id = ?");
  
  }  elseif ($table === 'person') {
    $stmt = $connection->prepare("DELETE FROM person WHERE id = ?");
  
  } elseif ($table === 'personal') {
    $stmt = $connection->prepare("DELETE FROM personal WHERE id = ?"); 

  } elseif ($table === 'trip') {
    $stmt = $connection->prepare("DELETE FROM trip WHERE id = ?");
    
  } elseif ($table === 'allowance') {
    $stmt = $connection->prepare("DELETE FROM allowance WHERE id = ?"); 
    
  } elseif ($table === 'training') {
    $stmt = $connection->prepare("DELETE FROM training WHERE id = ?"); 
  }
  // Bind the ID parameter and execute the delete statement
  $stmt->bind_param("i", $id);
  if ($stmt->execute()) {
    echo 'success';
  } else {
    echo 'error';
  }
}
?>
