<?php

session_start();

$invalid_adminname="";
$invalid_password="";
$valid_adminname="";
$validpass="";

 
   

if(isset($_REQUEST["Submission"])){
    $admin_name=$_REQUEST["admin_name"];
    $password=$_REQUEST["admin_pass"];
   

   

    if(empty($admin_name)){
        $invalid_adminname="Please Enter your Admin name";
    }
    else{
        $valid_adminname=$admin_name;
    }

    if(empty($password)){
        $invalid_password="Please Enter your Password";
    }
    else if(!empty($password) && strlen($password)<8){
        
        $invalid_password="Password must Contains at least 8 characters";
            echo "<br>";
        
            
        }
    else{
        $validpass=$password;
          
            
          
    }



//login using json
$login_data=file_get_contents("../Admin_Data/admin_data.json");
$login=json_decode($login_data);

foreach($login as $login_data){
   
        if($login_data->Admin_Name==$valid_adminname && $login_data->Password==$validpass){
            
          
           
            $_SESSION['admin_name'] = $valid_adminname;
            $_SESSION['admin_pass'] = $validpass;
            header("Location:../Admin_View/Admin_HomePage.php");
        } 
        else{
            if(empty($admin_name))
            {
                $invalid_adminname= "You must enter Admin Name";
            }
           else
           {
            $invalid_adminname= "Invalid Admin Name or password";
           }
        
        } 
}


        }
    
   




?>