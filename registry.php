<?php
  // Open file
  $file = fopen("secrets.txt","r") or die("Unable to open file!");
  echo get_current_user() . '<br>';

 
  // User input
  $login = $_POST['login'];
  $password = $_POST['password'];

  $all = "\n"$login.';'.$password;

  // Read one line until end-of-file
  while(!feof($file)) {
    $line = fgets($file);
    $line = trim($line);
    if (strcmp($line, $all) == 0) {
      // already have this user
      echo '<script language="javascript">';
      echo 'alert("Already have this user")';
      echo '</script>';
      fclose($file);
      // go to secret page
      header('Location: workwithjs.html');
      exit();
    }
  }
  fclose($file);

  $file2 = fopen("secrets.txt", "a") or die("secondUnable to open file!");
  // if don't have this user, writting him to file
  fwrite($file2, $all);
  header('Location: workwithjs.html');
  fclose($file2);
  exit();
?>