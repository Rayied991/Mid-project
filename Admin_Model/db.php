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
        
        function checklogin($conn,$tablename,$admin_name,$password){
            $sqlstr="SELECT admin_name,Password FROM $tablename WHERE admin_name='$admin_name' AND Password='$password'";
            return $conn->query($sqlstr);
    
        }
        function Updateprofile($conn,$tablename,$admin_name,$password,$confirm_password){
        
            $sqlstr="UPDATE $tablename SET admin_name='$admin_name',password='$password',confirm_password='$confirm_password'  WHERE admin_name='$admin_name'";
            return $conn->query($sqlstr);
            
    
        }
        function Deleteprofile(){

        }
       
        function connclose($conn){
            return $conn->close();
        }
    }    
        



?>