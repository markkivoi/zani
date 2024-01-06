<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $Dbname  = "area";

  $conn = mysqli_connect($servername, $username, $password, $Dbname);

  if(!$conn){
    die(mysqli_error($conn));
  }

  /*else{
    echo "success";
  }*/


?>