<?php
include "data.php";

/*if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];
    
    if (empty($_POST['length'])){
        $errors[] = 'fill in the length field.';
    }

    if (empty($_POST['width'])){
        $errors[] = 'fill in the width field.';

    }

    if (!empty($errors)){
        echo '<ul>';
        foreach($errors as $error){
            echo '<li>'.$error.'</li>';
        }
        echo '</ul>';
    }
}

$is_invalid = FALSE;

if (empty($_POST["length"])){
    die("fill in the length field");
}
*/

if(isset($_POST['submit'])){
    $plotno = $_POST['plotno'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $area =$_POST['area'];
    $price = $_POST['price'];

    $sql = "INSERT INTO calculate(plotno,length, width, area, price) VALUES ( '$plotno','$length', '$width', '$area','$price')";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die(mysqli_error($conn));
    }
    else{
        //echo "success";
        //header('location:index.php');
      }
    
    //$is_invalid = TRUE;
}



?>