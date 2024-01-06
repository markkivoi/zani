<?php
    SESSION_START();
    //include "dataset.php";
    include "data.php";
    //include "view.php";


    $plotno= $_GET['updateid'];
    $sql = "SELECT * FROM calculate WHERE plotno = $plotno";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
          $plotno = $row['plotno'];
           $length = $row['length'];
           $width = $row['width'];
           $area = $row['area'];
           $area = number_format($area);
           $price = $row['price'];
           $price = number_format($price);

       
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plot Details</title>
    <link rel = "stylesheet" href="view.css">
</head>
<body>
    <form action="" method="POST">
          
         <h1>View Plot details</h1>
         <button><a href="index.php">Back</a></button><br>

         <div class="main">
            <div class="child">
            <label for="">Plot No: </label>
            <input type="text" name="plotno" id="plotno" class="textarea" autocomplete="off" readonly value=<?php echo $plotno; ?>><br><br>

            <label for="">Length: </label>
            <input type="text" name="length" id="length" autocomplete="off" readonly value=<?php echo $length; ?>><br><br>
            
    
            <label for="">Width: </label>
            <input type="text" name="width" id="width" class="textarea" autocomplete="off" readonly value=<?php echo $width; ?>><br><br>
    
            <label for="">Area (SQ m): </label>
            <input type="text" name="area" id="area" class="textarea" readonly  value=<?php echo $area; ?>><br><br>
    
           
            <label for="">Price(Ksh): </label>
            <input type="text" name="price" id="price" class="textarea" readonly  value=<?php echo $price; ?>> 
    
            </div>

            <div id="back">
               <img src="images/left-arrow.png"  style="width:30px; height:30px; margin-top:140px;" onclick="displayPrevious();">
           </div>
           
           
            

            <div class="child1">
                <!--<img src="images/image.jpg" alt="">-->
             <a href="?updateid='.$plotno.'"></a>
             <?php
              $plotno= $_GET['updateid'];
             if(isset($_GET['updateid'])){

    $imagePath = 'images/' . $plotno.'.jpg';

    if(file_exists($imagePath)){
     echo'<img src="' .$imagePath. '" alt="image">';
    }
    else{
     echo 'image not found.';
    }

 }
             ?>
            </div>

            <div id="next">
               <img src="images/right-arrow.png" style="width:30px; height:30px; margin-top:140px; margin-left:20px; ">
           </div>
         </div>
   
       
          <button> <a href="contact.php?updateid=<?php echo $plotno;?>"> Book Plot </a> </button><br><br>
          
   
    </form>
   
   <script src="app.js"></script>
</body>
</html>