<?php

echo "Hello World";


include("function.php");


?>

<html>
<head>
<link src= "style.css"> </link>
<style>
</style>
<body>


Register Form
<br>
<a href="signin.php" >login </a>
<br><br><br>

<form action="index.php" name="data_insert" id="data_insert" method="POST">

<Input type="text" name="username" id="username">
<br>
<input type="password" name="pass" id="pass">
<br>
<input type="submit">

</form>


</body>



