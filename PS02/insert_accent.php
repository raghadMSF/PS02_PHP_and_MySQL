<?php
include('./database_connection.php');

$sql = "INSERT INTO s_phone_lists (name, phone, mobile)
VALUES ('Mohamed', '171122333', '0577777777')";

if ($conn->query($sql) === TRUE) {
  echo "New Rows inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
