<?php
// Retrieve the column, ID, and new value from the AJAX request
$column = $_POST['column'];
$id = $_POST['id'];
$newValue = $_POST['value'];

// Perform necessary validation and sanitization of the input here

// Establish a database connection
$connection = mysqli_connect("localhost", "root", "", "bill");

if (!$connection) {
  die("Database connection failed: " . mysqli_connect_error());
}

// Escape the new value to prevent SQL injection
$newValue = mysqli_real_escape_string($connection, $newValue);

// Construct and execute the SQL query to update the value
$query = "UPDATE subs SET $column = '$newValue' WHERE id = $id";

if (mysqli_query($connection, $query)) {
  echo "success";
} else {
  echo "error";
}

// Close the database connection
mysqli_close($connection);
?>



<!-- 
$(document).ready(function() {
  $(document).on('click', '.editable-date', function() {
    var $cell = $(this);
    var column = $cell.data('column');
    var id = $cell.data('id');
    var originalValue = $cell.text();

    // Create an input field with the original value and date/time picker
    var $input = $('<input type="datetime-local" class="edit-date">');
    $input.val(originalValue); // Set the value to the original datetime
    $cell.html($input);

    // Focus on the input field
    $input.focus();

    $input.on('change', function() {
      var newValue = $input.val().trim();

      if (newValue !== originalValue) {
        updateDatabase(column, id, newValue, function(success) {
          if (success) {
            $cell.text(newValue);
          } else {
            $cell.text(originalValue);
            alert('Failed to update the value. Please try again.');
          }
        });
      } else {
        $cell.text(originalValue);
      }
    });
  });

  function updateDatabase(column, id, newValue, callback) {
    // Make an AJAX request to update.php
    $.ajax({
      url: 'update.php',
      type: 'POST',
      data: { column: column, id: id, value: newValue },
      success: function(response) {
        if (response === 'success') {
          callback(true);
        } else {
          callback(false);
        }
      },
      error: function() {
        callback(false);
      }
    });
  }
}); -->
