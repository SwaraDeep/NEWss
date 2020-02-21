<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>NEWss</title>
<style>
body, html{
font-family:Segoe UI, Segoe UI Midlevel, Segoe WP, Arial, Sans-Serif;
}
.mytext{
text-align: right;
margin: 20px;
}
.contact{
text-align: center;

}
.cards{
float: left;
}
h2{
margin: 0px;
}
.container{
float: left;
width:280px;
margin-left: 15px;
margin-right: 35px;
margin-bottom: 40px;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
transition: 0.3s;
}
.container:hover{
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.bottom{
 font-size: 25px;
 padding-left: 15px;
 padding-bottom: 10px; 
}
img{
width: 100%;
}
.title{
color:#555555;
margin: 10px;
}
</style>
<script src="readNews.php" type="text/javascript"></script>
</head>
<body>
<div class="mytext">
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
		$image = "'".$row["imageurl"]."'";
		$title = "'" .$row["title"]."'";
		$desc = $row["description"];
		$writer = $row["writer"];
		//echo "<br>$id $image $title $desc $writer<br>";
    	//echo "<img onClick=setUrl(" .$id .','."'". $image."',encodeURIComponent('".$title."'),encodeURIComponent('".$desc."'),encodeURIComponent('".$writer."')); src=" .$row["imageurl"]. " width=380 height=250 name=".$row["idnews"].">".$row["title"];
    	echo "<div class=container>
                <img onClick=setUrl(" .$image .',' .$title .") src=" .$row["imageurl"] ." name=".$row["idnews"].">
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
<div class="contact"><p class="contact"><h2><b>Contact:</b></h2>Swaradeep Neeli<br>Aditya Degree College<br>Rajahmundry<br>+91 9 6180 61803<br>swaradeepneeli@gmail.com	</p></div>


</body>
</html>