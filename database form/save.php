<?php
$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$conn = mysqli_connect("localhost:3308", "root", "", "database _form") or die("connection failed");
$sql = "INSERT INTO database_table(`First_name`, `Last_name`, `Email`, `Mobile`) VALUES ('{$fistname}','{$lastname}','{$email}','{$mobile}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/database%20form/contactfrom.php");
mysqli_close($conn);
?>