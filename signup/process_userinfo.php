<?php
if(!isset($_COOKIE["username"])) {
    echo "No user logged in.";
    // Redirect to login page or show a message
    exit();
}

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "exams";
$username = $_COOKIE["username"];

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$phone = $conn->real_escape_string($_POST['phone']);
$dt = $conn->real_escape_string($_POST['dt']);

$sql = "INSERT INTO userinfo (username, name, phone, dt) VALUES ('$username', '$name', '$phone', '$dt')";

if ($conn->query($sql) === TRUE) {
    echo "User information saved successfully";
    // Redirect or display a message
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
