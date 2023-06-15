<?php
//checking submit
if(isset($_POST['submit']))
{

    //include connection file

    require 'config.php';


    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $DOB=$_POST['birthday'];
    $gender=$_POST['gender'];
    $address=$_POST['Address'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    
    //insert data

    $sql="INSERT INTO user VALUES ('$firstname','$lastname','$DOB','$gender','$address','$email','$username','$password')";

    if($con->query($sql))
    {
        header("Location:http://localhost/MLB_06.01_04%20Wild-Life%20Safari%20Trip%20Management%20System/IT21312380/html/registration.html");
    }
    else
    {
        echo "error". $con->error;
    }    
}

$con->close();



?>