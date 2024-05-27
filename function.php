<?php
include("connection.php");

if(isset($_POST['registerform']) and !empty($_POST['registerform']))
{

	 $sql = "INSERT INTO user "."(name,password) "."VALUES "."('".$_POST['username']."','".$_POST['pass']."')";
     $result = mysqli_query($con,$sql);  
	 //print_r($result);
     header("Location:index.php?register=success");	 

}


if(isset($_POST['signinform']) and !empty($_POST['signinform']))
{
    $username = $_POST['username'] ;
	$password = $_POST['pass'] ;
	
	$sql= "SELECT * FROM user WHERE name = '$username' AND password = '$password' ";
	$result = mysqli_query($con,$sql);
	$check = mysqli_fetch_array($result);

    	
	$_SESSION['username'] =  $check['name'];
	$_SESSION['username_id'] =  $check['id'];
	$_SESSION['is_admin'] =  $check['is_admin'];
	
	if( $_SESSION['is_admin'] == 1 )
	{
		header("Location:admin/index.php");
	}
	else
	{
		header("Location:index.php");
	}

}

print_r($_POST);

if(isset($_POST['category_operat']) and !empty($_POST['category_operat']) ) 
{
	
	$sql = "INSERT INTO category "."(category_name,parent_category) "."VALUES "."('".$_POST['category_name']."','".$_POST['parent_cat']."')";
	$result = mysqli_query($con,$sql);  
	
     header("Location:admin/category.php");
}

	


?>