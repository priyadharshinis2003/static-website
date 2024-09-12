<?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['dob'];
$d=$_POST['mobile'];
$con=mysqli_connect("localhost","root","","web");
$sql="INSERT INTO userdetail( user_name,DOB,Email,Mobile)values('$a','$b','$c','$d')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo"LOGIN DETAILS ADDED SUCCESFULLY";
}
else
{
    echo"LOGIN DETAILS ADDED NOT SUCCESFULLY";
}
?>