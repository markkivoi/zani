<?php

session_start();

 include "data.php";

  if(isset($_POST['submit']))
  {

    
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
       
       $query = "select * from users where user_name = '$user_name' limit 1";
      $result = mysqli_query($conn, $query);

      if ($result)
      {
        if ( $result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] === $password)
            {
                $_SESSION['user_id'] =$user_data['user_id'];

                header("location:home.html");
                die;
            }
        }
      }
      echo "please enter valid information";
      
    }else
    {
      echo "please enter valid information";
    }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>LOG IN</title>
    
<link rel ="stylesheet" href ="login.css">
</head>
<body>
    <form method = "POST" action= "login.php">
    <br><br><div style = "color:black; text-align:center;">LOG IN PAGE</div> <br><br>
    <input id="text" type="text" name = "user_name" placeholder ="Enter user name" autocomplete = "off"> <br><br>
    <input id ="text" type="password" name = "password" placeholder ="Enter password" autocomplete = "off"> <br><br>

    <button type="submit"  name="submit">Log In</button>
    </form>

</body>
</html>