<?php
SESSION_START();
include "data.php";


$plotno= $_GET['updateid'];


?>
       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <marquee behavior="" direction="right">Get Yourself A Piece Of Land At Friendly Cost</marquee><br>
    <marquee behavior="left" direction="left">We Are Glad  For Trusting And Investing With Us!!!!!!</marquee>
    <form action="contact.php" method="POST">
        <div class="formm">
            <input type="text" name="plotno" id="plotno" class="textarea" autocomplete="off" readonly value=<?php echo $plotno; ?>>

            <input type="text" name="name" placeholder="Full Name" id="value" autocomplete="off"><br>
            <input type="text" name="idno" placeholder="Id Number" id="" autocomplete="off"><br>
            <input type="email" name="email" placeholder="Email"  id="" autocomplete="off"><br>
            <input type="text" name="phone_number" placeholder="Phone Number" id="" autocomplete="off"><br>

            <button type="submit" class="view" name="submit">Submit</button>
           
            
        </div>
       
    </form>
    
</body>
</html>

<?php
SESSION_DESTROY();
include "data.php";


if (isset($_POST['submit'])){
    $plotno = $_POST['plotno'];
    $name = $_POST['name'];
    $idno = $_POST['idno'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

    $sql = "INSERT INTO contact(plotno, name, idno, email, phone_number) VALUES ('$plotno', '$name', '$idno', '$email', '$phone_number')";
    
    $resultt = mysqli_query($conn, $sql);

   if(!$resultt ){
        die(mysqli_error($conn));
    }
    else{
        
        //echo "information submitted successfully";
       //header('location:view.php');
      }
      SESSION_DESTROY();
      header('location:index.php');
}


?>