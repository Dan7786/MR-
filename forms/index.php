<?php
  

  $servername = "localhost";
  $username = "root";
  $password = "uBRp@8uBRp@8";
  $db_name = "bonga";
  // Create connection
  $conn = new mysqli( $servername, $username, $password, $db_name );

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
 
  $sql = "INSERT INTO student VALUES (NULL, '$name', '$email', '$subject', '$message')";
  $result = $conn->query($sql);

  if ($conn->query($sql) === TRUE) {
    echo "Your Message has been successfully submitted.";
  } else {
    echo "Sorry Unable to send your message";
  }

?>