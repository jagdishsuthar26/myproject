<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>view book records</title>
</head>
<body>
<div id="header">
<h3>  CIT book record management</h3>
</div>
<link rel="stylesheet" href="./css/view.css"/>

	<table id="view_table">
		<tr id="head1">
			<th>BOOK ID</th>
			<th>TITLE</th>
			<th>PRICE</th>
			<th>AUTHOR</th>
		</tr>
		<?php
		for($i=1;$i<=$num;$i++)
		{
			$row=mysqli_fetch_array($result);
		?>	
		<tr>
		<td><?php echo $row['bookid'] ?></td>
		<td><?php echo $row['title'] ?></td>
		<td><?php echo $row['price'] ?></td>
		<td><?php echo $row['author'] ?></td>
		</tr>
		<?php
		}
		?>
		
	</table>

<h3>Go back to home page<a href="Home.php">click here</a></h3>

</body>
</html>