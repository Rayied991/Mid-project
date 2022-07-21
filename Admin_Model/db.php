<?php
class db{
    function opencon(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="admin";
        //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
    echo "error connecting database";
}
return $conn;
    }
    function insertadmin($fname,$lname,$age,$gender,$mob_no,$email,$admin_name,$password,$confirm_password,$table,$conn){

        $sqlstr="INSERT into $table(fname,lname,age,gender,mob_no,email,admin_name,password,confirm_password) VALUES ('$fname','$lname','$age','$gender','$mob_no','$email','$admin_name','$password','$confirm_password')";
        if($conn->query($sqlstr)){
            echo "data is being inserted";
        }
        else{
            echo "can't insert".$conn->error;//error debug using this property
        }
            }
        }



?>