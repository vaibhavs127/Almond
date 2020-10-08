<?php


// Connect to a database
$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');

echo 'Processing...';

// if(isset($_POST['name'])){
//     echo 'POST: your name is'. $_POST['name'];
// }

// Check for POST variable
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  //echo 'POST: Your name is '. $_POST['name'];

  $query = "insert into user (name,email,password) values ('$name','$email','$password')";

  if(mysqli_query($conn, $query)){
    echo 'User Added...';
  } else {
    echo 'ERROR: '. mysqli_error($conn);
  }

// Check for GET variable
if(isset($_GET['name'])){
  echo 'GET: Your name is '. $_GET['name'];
}
?>