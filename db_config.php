<?php
$servername = "localhost";
$username = "root";
$password = "";
$DatabaseName = "gym_crm";
$conn = mysqli_connect($servername, $username, $password, $DatabaseName);
if ($conn) {
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>