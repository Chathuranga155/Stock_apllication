

<?php

	// Connect to database
	include "config.php";

	// Get all the courses from courses table
	// execute the query
	// Store the result
	$sql = "SELECT * FROM `stock_s`";
	$Sql_query = mysqli_query($conn,$sql);
	$All_courses = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Using internal/embedded css -->
	<style>
		.btn{
			background-color: red;
			border: none;
			color: white;
			padding: 5px 5px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 20px;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 20px;
		}
		.green{
			background-color: #199319;
		}
		.red{
			background-color: red;
			margin-left: 10px;
		}
		/* }
		table,th{
			border-style : solid;
			border-width : 1;
			text-align :center;
		}
		td{
			text-align :center;
		} */
	</style>	
</head>

<body>
	
	<table class="table table-dark table-striped">
		<!-- TABLE TOP ROW HEADINGS-->
		<tr>
			<th>Stock id</th>
			<th>Stock Name</th>
			<th> Status</th>
			<th>Toggle</th>
		</tr>
		<?php

			// Use foreach to access all the courses data
			foreach ($All_courses as $course) { ?>
			<tr>
				<td><?php echo $course['id']; ?></td>
				<td><?php echo $course['stock_name']; ?></td>
				<td><?php
						// Usage of if-else statement to translate the
						// tinyint status value into some common terms
						// 0-Inactive
						// 1-Active
						if($course['status']=="0")
							echo "Active";
						else
							echo "Inactive";
					?>						
				</td>
				<td>
					<?php
					if($course['status']=="1")


						echo
							"<a href=deactivate.php?id=".$course['id']." class='btn red'>Deactivate</a>";
					else 
						echo
							"<a href=activate.php?id=".$course['id']." class='btn green'>Activate</a>";

					
						echo
							"<a href=menu.php?id=".$course['id']." class='btn red'>Deactivate</a>";

					
					?>
			</tr>
		<?php
				}
				// End the foreach loop
		?>
	</table>
</body>

</html>





