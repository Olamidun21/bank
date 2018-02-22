<?php
$a=session_id();
session_start();
require ("dbcon.php");
//if(isset($_POST['email']) and isset($_POST['pwd'])){
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$sql= mysqli_query($conn, ("SELECT FROM registration_tb WHERE email='$email' and password='$pwd'"));
$row = mysqli_fetch_array($sql);
if(!empty($row['email'])and !empty($row['password'])){
	echo" You have successfully login";
}else{
	echo"Incorrect Email or password";
	};
//if($sql==true){
//	if(isset ($_POST['email'])){
//		$select=mysqli_query($conn,("SELECT FROM registration_tb WHERE email='$email'"));
//		if($select){
		//	while($s=mysqli_fetch_array($select)){
		//		$Firstname =$s[Firstname];
		//		$Lastname =$s[Lastname];
		//		$Email=$s[email];
//		echo"welcome";
//		};
//};
//};
//};
	
?>