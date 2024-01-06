<?php

/*if (empty($_POST["length"]) && empty($_POST["email"])){
    die("fill empty fields");
    
}*/

if(! filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)){
       
    die("valid email required");
}

?>