<?php
SESSION_START();

include "data.php";
//include "dataset.php";
//include "process.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>

    <link rel ="stylesheet" href ="style.css">
</head>
<body>    
<h1 class="underline">Calculated Area & Price for Available Plots</h1>
<button><a href="plots.php">Download</a></button>
<table>
<tr>
<th colspan="1">Plot No.</th>
<th colspan="1">length</th>
<th colspan="1">width</th>
<th colspan="1">area</th>
<th colspan="1">price(ksh)</th>
<th >Operations</th>
</tr>
<tr>
    <tbody>



       <?php

     $sql= "select * from calculate";
     $result = mysqli_query($conn,$sql);
     if($result){
       while($row=mysqli_fetch_assoc($result)){
           $plotno = $row['plotno'];
           $length = $row['length'];
           $width = $row['width'];
           $area = $row['area'];
           $area = number_format($area);
           $price = $row['price'];
           $price = number_format($price);

    
           echo '<tr>
           <td>'.$plotno.'</td>
           <td>'.$length.'</td>
           <td>'.$width.'</td>
           <td>'.$area.'</td>
           <td>'.$price.'</td>
           <td>
           <div class= "wambua">
           <button><a href="contact.php?updateid='.$plotno.'">Contact</a></button>
        <button id="kivoi" style="background-color: yellow;"><a href="view.php?updateid='.$plotno.'">View</a></button>
        </div>
           </td>  
           
           </tr>';
       }
     }
     else{
        die(mysqli_error($conn));
     }
       ?> 
    <button><a href="login.php">Log in</a></button>
    
</body>
</html>