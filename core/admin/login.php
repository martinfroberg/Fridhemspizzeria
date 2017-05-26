<?php
require_once "../database/connection.php";
$con = Database::getConnection();

//Check admin login, login user if correct
if(isset($_POST['username']) && isset($_POST['password'])){
  $stmt = $con->prepare("SELECT id, password_hash FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $stmt->execute();
  $stmt->bind_result($user_id, $password_hash);
  while ($stmt->fetch()){}

  if (!isset($user_id)) {
    header('Location: ../../admin.php');
  } else {
    //User found
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    if (password_verify($password, $password_hash)){
      //Correct password
      //TODO Create session, enter session_hash into db
      session_start();
      $_SESSION['user_id'] = $user_id;

      header('Location: ../../index.php');
    } else {
      //Incorrect password
      header('Location: ../../admin.php');
    }
  }
  $stmt->close();
} ?>
