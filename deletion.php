<?php 
	$size=sizeof($_POST);
	$j=1;
	for($i=1;$i<=$size;$i++.$j++){
		$index="b".$j;
		if(isset($_POST[$index]))
			$b_id[$i]=$_POST[$index];
		else 
			$i--;
	}
	$con=mysqli_connect('localhost','root','','BRM_DB');
	for($k=1;$k<=$size;$k++){
	$q="delete from book where bookid=".$b_id[$k];
	mysql_query($con,$q);
	}
	mysqli_close($con);
	

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Deletion </title>
</head>
<body>
	<h1>Book Record Management</h1>
	<p>
	<?php 
		echo $size."Record Inserted";
	
	?>
	</p>
	Go Back to Home Page<a href="home.php" ><u><b>Click Here</b></u></a>
	</body>
	</html>