<html>
<head>
<style >
form, b{
padding: 10px;
}
input{
width: 150px;
}
</style>
</head>
</html>

<?php
try {
$name = $_POST["name"];
$pass = $_POST["pass"];
} catch (Exception $e) {
    echo "Error while logging in! Please try logging in";
}
$name = sha1($name);
$pass = sha1($pass);
if($name === "d033e22ae348aeb5660fc2140aec35850c4da997" && $pass === "d033e22ae348aeb5660fc2140aec35850c4da997"){
    echo "<b>Create Database:</b><form action='createdb.php'> <input type='submit' value='Create DB'>
</form><br>
<b>Create Table:</b>
<form action='createtable.php'>
	<input type='submit' value='Create Table'>
</form><br>
<b>Drop Database:</b>
<form action='truncateTable.php'>
	<input type='submit' value='Delete Rows'>
</form><br>
<b>Drop Table:</b>
<form action='droptable.php'>
	<input type='submit' value='Drop Table'>
</form><br>
<b>Drop Database:</b>
<form action='dropdatabase.php'>
	<input type='submit' value='Drop Database'>
</form>";
}else{
    echo "Invalid Credentials!";
}


?>