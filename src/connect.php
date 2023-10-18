<?php

$message = filter_input(INPUT_POST, 'message');

if (empty($message)) {
    header("Location: index.php?error=Message is required.");
    exit();
}

$dbhost = "db";
$username = "root";
$password = "example";
$dbname = "usermessage";

$conn = new mysqli($dbhost, $username, $password, $dbname);

if (mysqli_connect_error()) {
    header("Location: index.php?error=Database error occurred. Please try again later.");
    exit();
}

$sanitized_message = $conn->real_escape_string($message);
$sql = "INSERT INTO messages (message) VALUES ('$sanitized_message')";

if ($conn->query($sql)) {
    echo "Message Sent Successfully.";
} else {
    header("Location: index.php?error=Database error occurred. Please try again later.");
    exit();
}

$conn->close();
