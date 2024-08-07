	<i><a href="logout.php">logout</a></i><br>
	Welcome
	<?php 
		if (isset($_GET['name']))
		{
			echo $_GET['name'];
}

		 ?>
	<?php 

$conn = mysqli_connect("localhost","root","","sd") or die ("connection failure");
$sql = "select * from st";  
$result = mysqli_query($conn, $sql) or die ("query failure");

 ?>

 <center>
 	<h1><a href="add.php">Add New Student</a></h1>
 </center>
 <table border=1 width=70%>
 	<tr><th>Roll</th><th>Name</th><th>Address</th><th>Edit</th><th>Delete</th>
 	</tr>
 	<?php 
 	while ($row = mysqli_fetch_assoc($result)) {
 	 ?>
 	 <tr><td><?php echo $row['roll']; ?></td>
 	 <td><?php echo $row['name']; ?></td>
 	 <td><?php echo $row['address']; ?></td>
 	 <td><a href='update.php?id= <?php echo $row['roll'];?>'>Edit</a></td>
 	 <td><a href='delete.php?id= <?php echo $row['roll'];?>'>Delete</a></td>	
 	 </tr>
<?php 
}
 ?>
 </table>