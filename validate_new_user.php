<?php
  session_start();
  include 'php_functions.php';
  
  $_SESSION['signup_message'] = '';

  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $pass = $_POST['pass'];
  $pass2 = $_POST['pass2'];
  $email = $_POST['email'];
  
  if($pass2 !== $pass) {
    $_SESSION['signup_message'] = "Please insert equal passwords.";
    header('Location: signup.php');
    exit;
  }
  
  else {
    $data = new MysqlConnector();
    $data->connectMysql();
    
    if($data->isRegistred($email)) {
      $_SESSION['signup_message'] = "Email already exists.";
      header('Location: signup.php');
      exit;
    }
    
    $pass = cryptPass($pass);
    
    $data->signUp($email, $pass, $name, $surname);
  
    $data->disconnectMysql();
    
    header('Location: login.php');
  }
