<?php
include 'dbconfig.php';

$id = $_GET["id"];

$sql = "SELECT id, firstname, lastname, birthdate, biodata, photo_url FROM people where id=$id";
$result = $conn->query($sql);

$json_data = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    array_push($json_data, $row);
  }
} else {
  echo "0 results";
}
$conn->close();

// print_r($json_data);
echo json_encode($json_data);