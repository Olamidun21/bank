<?php

$a= session_id();
session_start();
require "dbcon.php";

$firstname=$_POST['fname'];
$middlename=$_POST['mname'];
$lastname=$_POST['lname'];
$dob=$_POST['dob'];
$address=$_POST['addy'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$next=$_POST['nok'];
$password=$_POST['pwd'];
$country=$_POST['country'];
$sex=$_POST['radio'];
 $con = mysqli_query( $conn,("INSERT INTO registration_tb (Firstname, Middlename, Lastname, dateofbirth, gender, email, phone, password, address, 
 nextofkin, Nationality) VALUES ('$firstname', '$middlename','$lastname', '$dob', '$sex', '$email', '$phone', '$password','$address','$next','$country')"));
 if($con){
	 echo"
	 <script>
	 window.location='login.html';
	 </script>
	 ";
 }
 else{
 echo" ".mysqli_error($conn);	 
 }
 session_destroy();
?>