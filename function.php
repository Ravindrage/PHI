<?php
include("connection.php");

if(isset($_POST['registerform']) and !empty($_POST['registerform']))
{

	 $sql = "INSERT INTO user "."(name,password) "."VALUES "."('".$_POST['username']."','".md5($_POST['pass'])."')";
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



if(isset($_POST['category_operat']) and ($_POST['category_operat'])=="new_submitted" ) 
{
	
	$sql = "INSERT INTO category "."(category_name,parent_category) "."VALUES "."('".$_POST['category_name']."','".$_POST['parent_cat']."')";
	$result = mysqli_query($con,$sql);  
	
     header("Location:admin/category.php");
}

if(isset($_POST['category_operat']) and ($_POST['category_operat']=="edit_submitted") ) 
{
	
    $name = $_POST['category_name'];	
	$id = $_POST['edit_id'];
	$sql = "update category set category_name =  '$name' where id= $id ";
	$result = mysqli_query($con,$sql);  
	header("Location:admin/category.php");
	
	

}



if(isset($_GET['del']) and ( $_GET['del'] == "category"))
{
	  $sql = "delete from category where id='".$_GET['id']."'";
	  $result = mysqli_query($con,$sql);
      header("Location:admin/category.php");	  
}

	


?>