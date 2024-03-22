<?php
include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $s_type = $_POST["s_type"];
  // Insert product into database
  $sql = "INSERT INTO add_product (s_type) VALUES ('$s_type')";
  
  if (mysqli_query($conn, $sql)) {
      echo header("Location:tender-for-service.php");
      die();;
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  // Close database connection
  mysqli_close($conn);
}
?>