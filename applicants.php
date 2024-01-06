<?php
SESSION_START();

include "data.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICANTS DATA</title>
    <link rel="stylesheet" href="applica.css">
</head>
<body>
    <h1 class="underline">Applicants Personal Data from The land Booking Form</h1>
    <table> 

    <tr>
        <th>Plot No</th>
        <th> Name</th>
        <th>Id No</th>
        <th>Email</th>
        <th>Phone No</th>
        </tr>
    
        <tbody>
        <?php
        $sql = "select * from contact";
        $result = mysqli_query($conn, $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $plotno = $row['plotno'];
                $name = $row['name'];
                $idno = $row['idno'];
                $email = $row['email'];
                $phone_number = $row['phone_number'];
                
     
         
                echo '<tr>
                <td>'.$plotno.'</td>
                <td>'.$name.'</td>
                <td>'.$idno.'</td>
                <td>'.$email.'</td>
                <td>'.$phone_number.'</td>
                </tr>';
            }
            SESSION_DESTROY();
        }

        ?>
     </tbody>
    
   </table>
   <div class="markbtn">
   <button><a href="home.html">Back</a></button>
   <button><a href="index.php">log out</a></button>
   <button><a href="app.php">Download</a></button>
    </div>
</body>
</html>