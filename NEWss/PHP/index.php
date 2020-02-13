<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>NEWss</title>
<style>
div{
 text-align: right;
}
</style>
<script src="readNews.js" type="text/javascript"></script>
</head>
<body>
<div>
<a href="AdminLogin.html" class="admin">Admin? Login here!</a><br>
<a href="PostNews.html">Post a new NEWss</a>

</div>
<?php
$conn = new mysqli("localhost", "root", "12345", "myDB");
$que = "SELECT * FROM news;";
$result = $conn->query($que);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$id = $row["idnews"];
		$image = $row["imageurl"];
		$title = $row["title"];
		$desc = $row["description"];
		$writer = $row["writer"];
		echo "<br>$id $image $title $desc $writer<br>";
    	//echo "<img onClick=setUrl(" .$id .','."'". $image."',encodeURIComponent('".$title."'),encodeURIComponent('".$desc."'),encodeURIComponent('".$writer."')); src=" .$row["imageurl"]. " width=380 height=250 name=".$row["idnews"].">".$row["title"];
		
    	echo "<img onClick=setUrl(" .$id .','."'". $image."',encodeURIComponent('".$title."'),encodeURIComponent('".$desc."'),encodeURIComponent('".$writer."')); src=" .$row["imageurl"]. " width=380 height=250 name=".$row["idnews"].">".$row["title"];
	
}

} else {
    echo "0 results";
}

$conn->close();
?>
<script type="text/javascript">
function setUrl(id,image, title, desc, writer){
	document.writeln(id," ",image, " ", title, " ", desc, " ",writer);
}
</script>
</body>
</html>