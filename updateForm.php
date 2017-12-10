<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="Select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Insert Book Record</title>
	<link rel="stylesheet" href="./css/viewStyle.css"/>
</head>
<body>
	<h1>Book Record Management</h1>
	<form action="updation.php" method="post">
	<table id="view_table">
		<tr>
			<th>Book ID</th>
			<th>Title</th>
			<th>Price</th>
			<th>Author</th>
		</tr>
		<?php
		for ($i=1;$i<=$num;$i++){
			$row=mysqli_fetch_array($result);
		?>
		<tr>
		<td><?php echo $row['bookid'];?><input type="hidden" name="bookid<?php echo $i?> "value="<?php echo $row['bookid'];?>"> </td>
		<td><input type="text"  name="title<?php echo $i;?>"  value="<?php echo $row['title'];?>"/></td>
		<td><input type="text"  name="price <?php echo $i;?>" value="<?php echo $row['price'];?>"/></td>
		<td><input type="text" name="author<?phph echo $i?>"  value="<?php echo $row['author'];?>"/></td></tr>
		<tr><td align="right"><input type="Submit" value="update"></td></tr>
		<?php
		}
		?>
	</table>
	</form>
</body>
</html>












