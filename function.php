<?php
session_start();
require 'dbcon.php';

if (isset($_POST['sendMessage'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO user (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($query) === TRUE) {
       header ("Location: index.php");
    } else {
        header ("Location: index.php");
    }

    $conn->close();
}
?>
