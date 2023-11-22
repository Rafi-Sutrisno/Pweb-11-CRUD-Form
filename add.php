<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="./Source/bootstrap.min.css">
	<link rel="stylesheet" href="./Source/style.css">
</head>

<body>
	<div class="container d-flex flex-column">
		<h2>Add Data</h2>
		<p>
			<a href="index.php">
				<button class="btn btn-dark">Home</button>
			</a>
		</p>

		<form action="addAction.php" method="post" name="add">
			<table width="25%" border="0">
				<tr> 
					<td>Name</td>
					<td><input type="text" name="name" style="background-color: #B7CECE; border-radius:10px; padding:3px;"></td>
				</tr>
				<tr> 
					<td>Age</td>
					<td><input type="text" name="age" style="background-color: #B7CECE; border-radius:10px; padding:3px;"></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input type="text" name="email" style="background-color: #B7CECE; border-radius:10px; padding:3px;"></td>
				</tr>
				<tr> 
					<td></td>
					<td>
						<button class="btn btn-dark" type="submit" name="submit">Add</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
	
</body>
</html>