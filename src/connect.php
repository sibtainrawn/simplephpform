<?php

$message = filter_input(INPUT_POST, 'message');

if (!empty($message)) {
    $dbhost = "db";
    $username = "root";
    $password = "example";
    $dbname = "usermessage";

    
    $conn = new mysqli($dbhost, $username, $password, $dbname);

    
    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
    
        $sanitized_message = $conn->real_escape_string($message);
        
        $sql = "INSERT INTO messages (message) VALUES ('$sanitized_message')";

        if ($conn->query($sql)) {
            echo "Message Sent Successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
} else {
    echo "Message is required.";
    die();
}
?>
