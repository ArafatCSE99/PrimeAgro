<?php

include "Connection.php";

$name=$_POST["name"];

$sql = "INSERT INTO goods (name)
VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>