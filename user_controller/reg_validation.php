<?php

$invalid_fname="";
$invalid_lname="";
$invalid_gender="";
$invalid_dob="";

$invalid_mobile="";
$invalid_email="";
$invalid_address="";

$invalid_set_user="";
$invalid_set_pass="";
$invalid_con_pass="";

///valid data to store in json
$valid_fname="";
$valid_lname="";
$valid_gender="";
$valid_dob="";
$valid_mobile="";
$valid_email="";
$valid_address="";
$valid_set_user="";
$valid_set_pass="";
$valid_con_pass="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $fname=$_REQUEST['f_name'];
    $lname=$_REQUEST['l_name'];
    $dob=$_REQUEST['dob'];

    $mobile=$_REQUEST['mobile'];
    $email=$_REQUEST['email'];
    $address=$_REQUEST['address'];

    $set_user=$_REQUEST['set_user'];
    $set_pass=$_REQUEST['set_pass'];
    $confirm_pass=$_REQUEST['confirm_pass'];

    if(empty($fname))
    {
        $invalid_fname="*you must enter first name";
    }
    else if(!preg_match("/^[a-zA-Z]*$/",$fname))
    {
        $invalid_fname="*first name must contain only alphabets";
    }
    else
    {
        $valid_fname=$fname;
    }

    if(empty($lname))
    {
        $invalid_lname="*you must enter last name";
    }
    else if(!preg_match("/^[a-zA-Z]*$/",$lname))
    {
        $invalid_lname="*last name must contain only alphabets";
    }
    else
    {
        $valid_lname=$lname;
    }
    //gender
    if(isset($_REQUEST['gender']))
    {
        $valid_gender=$_REQUEST['gender'];
    }
    else{
        $invalid_gender="*you must enter your gender";
    }

    if($dob)
    {
        $valid_dob=$dob;
    }
    else
    {
        $invalid_dob="*you must enter your date of birth";
    }

    if(empty($mobile))
    {
        $invalid_mobile="*you must enter your mobile number";
    } 
    else if(!empty($mobile) && !preg_match("/^[0-9]*$/",$mobile))
    {
        $invalid_mobile="*mobile number must contain only numbers";
    }
    else
    {
        $valid_mobile=$mobile;
    }
    
    if(empty($email))
    {
        $invalid_email="*you must enter your email";
    }
    elseif (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $invalid_email="*you must enter valid email";
    }
    else
    {
        $valid_email=$email;
    }

    if($address)
    {
        $valid_address=$address;
    }
    else
    {
        $invalid_address="*you must enter your address";
    }

    if(empty($set_user))
    {
        $invalid_set_user="*you must enter username";
    }
    else
    {
        $valid_set_user=$set_user;
    }

    if(empty($set_pass))
    {
        $invalid_set_pass="*you must enter your password";
    }
    else if(!empty($set_pass) && strlen($set_pass)<8)
    {
        $invalid_set_pass="*your password must be 8 characters";
    }
    else
    {
        $valid_set_pass=$set_pass;
    }
  

    if($confirm_pass)
    {
        $valid_con_pass=$confirm_pass;
    }
    else
    {
        $invalid_con_pass="*you must enter your confirm password";
    }

    if($valid_set_pass==$valid_con_pass)
    {
        $valid_con_pass=$valid_con_pass;
    }
    else
    {
        $invalid_con_pass="*password and confirm password must be same";
    }

///data to store in json
    $user_data=array(
        "fname"=>$valid_fname,
        "lname"=>$valid_lname,
        "dob"=>$valid_dob,
        "mobile"=>$valid_mobile,
        "email"=>$valid_email,
        "address"=>$valid_address,
        "set_user"=>$valid_set_user,
        "set_pass"=>$valid_set_pass,
    );
 
    $remaining_data=file_get_contents("../user_data/reg_user_data.json");
    $fetch_data=json_decode($remaining_data);
    $fetch_data[]=$user_data;

    $dump_json=json_encode($fetch_data, JSON_PRETTY_PRINT);
    
    if(file_put_contents("../user_data/reg_user_data.json",$dump_json))
    {
       echo "<br> Registration Successful !!!!<br>";
    }
    else
    {
        echo "Something went wrong";
    }


 }
    


?>