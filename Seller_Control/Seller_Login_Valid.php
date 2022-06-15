<?php

$invalid_sellername="";
$invalid_sellerpass="";

 $valid_sellername="";
 $valid_sellerpass="";

 if($_SERVER["REQUEST_METHOD"] =="POST")
 {
     
     $seller_name = $_REQUEST["seller_name"];
     $seller_pass= $_REQUEST["seller_pass"];

    if(empty($seller_name))
    {
        $invalid_sellername="Please Enter your Name";
    }
    else{
        $valid_sellername = $seller_name;
       echo "Name : " . $seller_name;
       echo"<br>";

    }
    
    if(empty($seller_pass))
    {
        $invalid_sellerpass="PLease Enter your Password";
    }
    else if (strlen($seller_pass) < 8)
    {
     $invalid_sellerpass = "Please enter password more than 8 characters";
    }
    else
    {
        $valid_sellerpass = $seller_pass;
        echo"Password Entered";
    }
 }


?>