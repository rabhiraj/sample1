<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdetails";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (username,password,name) VALUES ('".$_POST['Username']."', '".$_POST['Password']."', '".$_POST['name']."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error";
  }
  
  $conn->close();
?>