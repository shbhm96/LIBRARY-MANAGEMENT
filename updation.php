<?php 
	$size=sizeof($_POST);
	$record=$size/4;
	
	for($i=1;$i<=$records;$i++)
	{
		$index1="bookid".$i;
		$bookid[$i]=$_POST[$index1];
		$index2="title".$i;
		$bookid[$i]=$_POST[$index2];
		$index3="price".$i;
		$bookid[$i]=$_POST[$index3];
		$index4="author".$i;
		$bookid[$i]=$_POST[$index4];
	}
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'BRM_DB');
	for($i=1;4i<=$records;$i++)
	{
		$q="update book SET title ='$title[$i]',price=$price[$i],author='$author[$i]' where bookid=$bookid[$i];";
		mysqli_query($con,$q);
	}
		mysqli_close($con);
	
	
	?>
	<html>
<head>
	<title>Updation </title>
</head>
<body>
	<h1>Book Record Management</h1>
	<p>
	<?php 
		echo $size."Record Updated";
	
	?>
	</p>
	Go Back to Home Page<a href="home.php" ><u><b>Click Here</b></u></a>
	</body>
	</html>
	