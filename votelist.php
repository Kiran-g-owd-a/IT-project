<html>
	<head>
		<title>Voting</title>
	</head>

	<body>
	<center>
	<?php include('sess.php'); ?>
	
		<form action="success.php" method="POST">
			
			<?php
			
				$ses = $_SESSION['ses'];
				
				$sql2 = "select voted from login where name = '$ses'";
				$result2 = mysqli_query($conn, $sql2) or die ("Error");
				$row2 = mysqli_fetch_assoc($result2);
				
				if($row2['voted']==0)
				{
					$sql = "select name from candidate";
					$result = mysqli_query($conn, $sql) or die ("Error");
				
					while($row = mysqli_fetch_assoc($result))
					{
						echo "<input type='radio' name='cr' value='".$row['name']."'> &nbsp;".$row['name']."<br>";
					}
					
					echo "<input type='submit' value='Vote'>";
				}
				
				else
				{
					echo "You have already voted";
				}
				
				mysqli_close($conn);
				
			?>
			
			<br>
		</form>
	</center>
	</body>
</html>
