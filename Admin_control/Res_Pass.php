<?php
include("../Admin_Model/db.php");

$invalid_adminname="";
$svalid_adminname="";
$invalidpass="";
$validpass="";
$invalidcf="";
$validcf="";
$x=0;
$pass_regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
if(isset($_REQUEST["save_pass"])){
    $pass=$_REQUEST['ad_new_pass'];
    $cf=$_REQUEST['con_pass'];
    $admin_name=$_REQUEST["Ad_name"];

    if(empty($_REQUEST['Ad_name'])){
        $invalid_adminname="Please enter your Admin_Name";
    }
    else{
        $valid_adminname=$admin_name;
        $x++;
    };
    
    if(empty($pass)){
      $invalidpass="Please Enter a Valid Password";
      echo "<br>";
  }
  else{
     
      if(strlen($pass)>=5 && preg_match($pass_regex,$pass)){
          echo "Passwored Entered<br>";
          $validpass=$pass;
          $x++;
      }
      else{
          $invalidpass="Password is not valid!";
          echo "<br>";
      }
      echo "<br>";
    }

      if(empty($cf)){
        $invalidcf="Please Confirm Password";
        echo "<br>";
    }
    else{
        if($cf==$pass){
    
            $validcf=$cf;
            $x++;
            echo "Confirm Password Entered<br>";
        }
        else{
            $invalidcf="Password not matched try again!";
            echo "<br>";
           
        }
    }
    

    $mydb=new db();
    $conobj=$mydb->opencon();
    
    //forget password
    if($x==3){
        $con=$mydb->Updateprofile($conobj,"admin_registration",$admin_name,$pass,$cf);
        echo "Profile updated";
    }
    else{
        echo "Profile not updated";
    }
}
    
    
      

  


    
?>