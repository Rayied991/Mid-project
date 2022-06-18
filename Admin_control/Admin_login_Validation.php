<?php

include("../Admin_control/Admin_Registration_Validation.php");

session_start();

$invalid_adminname="";
$invalid_password="";
$valid_adminname="";
$validpass="";
 //$error="";
 
 
    

if(isset($_REQUEST["Submission"])){
    $admin_name=$_REQUEST["admin_name"];
    $password=$_REQUEST["admin_pass"];

   
    $_SESSION["admin_name"]=$_POST["admin_name"];
    
   	

   
   

    if(empty($admin_name)){
        $invalid_adminname="Please Enter your Admin name";
    }
    else{
        $valid_adminname=$admin_name;
    }

    if(empty($password)){
        $invalid_password="Please Enter your Password";
    }
    else if(!empty($password) && strlen($password)>=5){
        
           
           header("Location:../Admin_View/Admin_HomePage.php");
            $validpass=$password;
        }
        else{
            $invalid_password="Password is not valid";
            echo "<br>";
          
    }



//login using json
$login_data=file_get_contents("../Admin_Data/admin_data.json");
$login=json_decode($login_data);

foreach($login as $lg_data){
    //foreach($lg_data as $key=>value){
        if($lg_data->$admin_name==$valid_adminname && $lg_data->$password==$validpass){
            //header("Location:../Admin_View/Admin_HomePage.php");
           // if($lg_data=="password" && $value==$validpass){
                echo "Login Successful";
                header("Location:../Admin_View/Admin_HomePage.php");	
            }
            else{
                echo "Login Failed";
            }
        }
    }
   




?>