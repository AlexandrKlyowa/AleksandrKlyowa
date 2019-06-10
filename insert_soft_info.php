<?php
  $database = mysqli_connect("localhost", "root", "@Polevichenko1029", "software");
  if (!$database) {
    die("Connection error: " . mysqli_connect_error());
  } else {
    echo "Connect success <br>";
  }

  echo "<br><h1>this data will be inserted: </h1>";
  $soft_name = $_POST['softname'];
  echo "soft name: " . $soft_name . "<br>";
  
  $soft_creator = $_POST['softcreator'];
  echo "soft creator: " . $soft_creator . "<br>";
  
  $soft_price = $_POST['softprice'];
  echo "soft price: " . $soft_price . "<br>";
  
  $soft_platf = $_POST['softplatf'][0] . " " . $_POST['softplatf'][1] . " " . $_POST['softplatf'][2];
  echo "soft platf: " . $soft_platf . "<br>";

  $query = "insert into soft_info (name, creator, price, platform) 
  values ( '" . $soft_name . "', '" . $soft_creator . "', " . $soft_price . ", '" . $soft_platf . "' );";
  
  echo $query;

  if (mysqli_query($database, $query)) {
    echo "New record inserted";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($database);
  }
  
?>