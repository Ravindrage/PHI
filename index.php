<?php

/*
$name_9 = "Hariom" ; 
$number = 10 ; 
$percent = 10.15 ;


echo  $name_9;  echo '</br>';
echo $number; echo '</br>';
echo $percent;

//$$hindi = $number ; 

//echo $$hindi ; 
//////////////-Index Array ////////
/* -------------  Array Index array Example   -----------*/

/*$index_marks = array(80,90,99,71,80) ; 

echo '<pre>' ; 
print_r($index_marks); 
echo '</pre>' ; 

echo $index_marks[4];

/* -------------Associative array ------------------*/

/*$Associative_marks = array("Ram"=>"90","Harish"=>"99");

echo '<pre>' ; 
print_r($Associative_marks); 
echo '</pre>' ; 

echo $Associative_marks["Ram"];

/////*--------- Multidimensional Array --------------
//		1 2 3
//		4 5 6
//		7 8 9
//*/


/*$multi_array  = array(
						array("hc"=>"car","he"=>"bike","h"=>"cycle"),
						array("halicopter","rocket","aeroplane"),
						array("bajaj","Hero","yamaha"),
						);
						
	
echo '<pre>' ; 
print_r($multi_array); 
echo '</pre>' ; 

echo $multi_array[0][2] ;	

echo '</br>';
echo $multi_array[1][1];
echo '</br>';
echo $multi_array[2][2];


echo '</br>';

echo $marks["Ram"];


echo '</br>';

$condition = Null ;









//print
//print_r



*/




include("function.php");

//print_r($_SESSION);

?>

<html>
<head>
<link src= "style.css"> </link>
<style>
</style>
<body>


Register Form
<br>
<?php if(isset($_SESSION['username'])and !empty($_SESSION['username']) ) 
{ ?>
<a href="signout.php" >logout </a>
<?php
}else{ ?>
<a href="signin.php" >login </a> / 
<a href="register.php" >Register </a>

<?php } ?>
<br><br><br>

<div style="border:1px solid #888888">
<table style="width:100%; cellspacing:0; cellpadding:0; text-align:center; background-color:aqua;"> <tr> <td><a href="index.php"> Home </a>  </td>
<td> <a href="index.php">About Us  </a></td>
<td> <a href="category.php">Category  </a></td>
<td> <a href="products.php">Products  </a></td>
<td> <a href="profile.php">Profile  </a></td>
<td> <a href="orders.php">Orders  </a></td></tr>


<tr> <div style="border:1px solid #888888">
<td style="height:300px;border:1px solid #888888; background-color:#efefef;"> Category </div></td> 
<td colspan="5" style="border:1px solid #888888; background-color:#efefef;"> Products </td> 

</tr>
<tr> <td colspan="6"> <div style="border:1px solid #888888">Footer </div></td> <td></td> </tr>



</table>
</div>


</body>



