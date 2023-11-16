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

$sql = "SELECT name, phone, dt FROM userinfo WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='user-info'>";
        echo "<h2>" . $row["name"] . "</h2>";
        echo "<p><b>Phone:</b> " . $row["phone"] . "</p>";
        echo "<p><b>Description:</b> " . $row["dt"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No user information found.";
}

$conn->close();
?>
