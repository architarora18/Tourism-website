<?php

$mysqli = new mysqli('localhost', 'root', 'archit2000', 'blog');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

  $name = $_POST['fname'];
  $name = mysqli_real_escape_string($mysqli, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($mysqli, $email);

  $message = $_POST['message'];
  $message = mysqli_real_escape_string($mysqli, $message);
  
    $user_registration_query =  "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";
    $user_registration_submit = mysqli_query($mysqli, $user_registration_query) or die(mysqli_error($mysqli));
    $user_id = mysqli_insert_id($mysqli);
    header('location: contact.php');
?>
