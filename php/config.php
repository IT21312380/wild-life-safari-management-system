<?php
//creating variables
$servername="localhost";
$username="root";
$password="";
$dbname="safari_trip";

//creating connection

$con=new mysqli($servername,$username,$password,$dbname);

//checking connection

if($con->connect_error)
{
    die("connection failed:".$con->connect_error);
}

?>