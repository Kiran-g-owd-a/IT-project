<html>
	<head>
		<title>Voted</title>
	</head>

	<body><center>
	
		<?php include('sess.php');
		
			$ses = $_SESSION['ses'];

			$cr = $_POST['cr'];
			
			$sql = "UPDATE candidate SET vote_count = vote_count + 1 WHERE name = '$cr'";
			$result = mysqli_query($conn, $sql) or die ("Error");
			
			$sql3 = "UPDATE login SET voted = 1 WHERE name = '$ses'";
			$result3 = mysqli_query($conn, $sql3) or die ("Error");
		?>

		You have successfully voted!<br><br>

		Voted List:<br>
		
		<table>
			<?php				
				
				$sql2 = "select * from candidate";
				$result2 = mysqli_query($conn, $sql2) or die ("Error");
			
				while($row2 = mysqli_fetch_assoc($result2))
				{
					echo "<tr><td>".$row2['name']."</td><td>".$row2['vote_count']."</td></tr>";	
				}	
				
			?>	
		</table>
		<br>
		<a href="gultoo.php">Logout</a>	
</center>
	</body>
</html>
