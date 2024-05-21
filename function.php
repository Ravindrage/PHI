<?php

include("connection.php");


print_r($_POST);

if(isset($_POST['username']) and !empty($_POST['username']))
{
	
	
	 $sql = "INSERT INTO user "."(name,password) "."VALUES "."('".$_POST['username']."','".$_POST['pass']."')";
     $result = mysqli_query($con,$sql);  
	 print_r($result);	 
	
	
	
}

	


?>