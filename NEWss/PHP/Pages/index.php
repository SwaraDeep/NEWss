<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>NEWss</title>
<link href="index.css" type="text/css" rel="stylesheet">
<script src="readNews.php" type="text/javascript"></script>
</head>
<body>

<div class="heading">
<h1>NEWSs</h1>
</div>

<div class="menubar">
<a href="#home">Home</a>
<a href="#categories">Categories</a>
<a href="#about" >About Us</a>
<a href="#usage">How to use</a>
<a href="#contact">Contact</a>
</div>

<div class="menubar">
<a href="AdminLogin.html" class="admin">Admin? Login here!</a><br>
<a href="PostNews.html">Post a new NEWss</a>
</div>
<?php
$conn = new mysqli("localhost", "root", "12345", "myDB");
$que = "SELECT * FROM news;";
$result = $conn->query($que);

if ($result->num_rows > 0) {
    echo "<div class='cards'>"; 
    while($row = $result->fetch_assoc()) {
		$id = $row["idnews"];
		$image = "'images/".$row["imageurl"]."'";
		$title = "'" .$row["title"]."'";
		$desc = $row["description"];
		$writer = $row["writer"];
		//echo "<br>$id $image $title $desc $writer<br>";
    	//echo "<img onClick=setUrl(" .$id .','."'". $image."',encodeURIComponent('".$title."'),encodeURIComponent('".$desc."'),encodeURIComponent('".$writer."')); src=" .$row["imageurl"]. " width=380 height=250 name=".$row["idnews"].">".$row["title"];
    	echo "<div class=container>
                <img onClick=setUrl(" .$image .',' .$title .") src=" .$image ." name=".$row["idnews"].">
                <div class='bottom'><p class='title' ><b> ".$row["title"]."</b></p></div>
              </div>";
    }
echo "</div>";
} else {
    echo "0 results";
}

$conn->close();
?>

<script type="text/javascript">
function setUrl(image,title){
	document.writeln(image," ",title);
}
</script>
<br><br><br>

<div class="contact">
		<p><h2><b>Contact:</b></h2>
		<p id="contact">Swaradeep Neeli</p>
		<p>Aditya Degree College</p>
		<p>Rajahmundry</p>
		<p>+91 9 6180 61803</p>
		<p>swaradeepneeli@gmail.com</p><br>
</div>


</body>
</html>