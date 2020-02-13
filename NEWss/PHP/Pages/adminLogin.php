<?php
$name = $_POST["name"];
$pass = $_POST["pass"];
if($name === "admin" && $pass === "admin"){
    echo "Create Database:<form action='createdb.php'> <input type='submit' value='Create DB'>
</form><br>
Create Table:
<form action='createtable.php'>
	<input type='submit' value='Create Table'>
</form><br>
Drop Table:
<form action='droptable.php'>
	<input type='submit' value='Drop Table'>
</form><br>
Drop Database:
<form action='dropdatabase.php'>
	<input type='submit' value='Drop Database'>
</form>";
}else{
    echo "Invalid Credentials!";
}

?>