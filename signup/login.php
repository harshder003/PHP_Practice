<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exams";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_username = $conn->real_escape_string($_POST['login_username']);
    $login_password = $conn->real_escape_string($_POST['login_password']);

    $sql = "SELECT password FROM users WHERE username = '$login_username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row["password"] == $login_password) {
            setcookie("username", $login_username, time() + (86400 * 30), "/"); // 86400 = 1 day
            echo "Login successful!";
            header("Location: userinfo.php");
        } else {
            echo "Wrong password!";
        }
    } else {
        echo "Incorrect username!";
    }

    $conn->close();
}

?>
