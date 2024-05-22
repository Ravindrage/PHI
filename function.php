<?php

include("connection.php");


print_r($_POST);

if(isset($_POST['username']) and !empty($_POST['username']))
{

	 $sql = "INSERT INTO user "."(name,password) "."VALUES "."('".$_POST['username']."','".$_POST['pass']."')";
     $result = mysqli_query($con,$sql);  
	 print_r($result);	 

}


if(isset($_POST['signinform']) and !empty($_POST['signinform']))
{
    $username = $_POST['username'] ;
	$password = $_POST['pass'] ;
	
	echo $sql= "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
	$result = mysqli_query($con,$sql);
	$check = mysqli_fetch_array($result);

	print_r($check);

}

	


?>