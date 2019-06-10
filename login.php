<?php
  // Open file
  $file = fopen("secrets.txt", "r") or die("Unable to open file!");
  
  // User input
  $login = $_POST['login'];
  $password = $_POST['password'];

  $all = $login . ';' . $password;

  // Read one line until end-of-file
  while(!feof($file)) {
    $line = fgets($file);
    $line = trim($line);
    if (strcmp($line, $all) == 0) {
      // go to secret page
      fclose($file);
      header('Location: workwithjs.html');
      exit();
    }
  }
  fclose($file);
  // if login and password do not match, come back
  header('Location: login.html');
  exit();
?>