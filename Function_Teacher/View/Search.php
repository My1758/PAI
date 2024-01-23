<?php 
	include 'checkLogin.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Instructor's page</title>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
		<div class="menu">
			<table>
				<tr>
					<td><a href="../../Index.php">Home page</a></td>
					<td><a href="#">Schedule</a></td>
					<td><a href="#">Input score</a></td>
					<td><a href="#">Change Password</a></td>
					<td><a href="#">Log out</a></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="main_display">
		<div class="left">
			<h2>Function	</h2>
			<ul>
				<li><a href="../../Index.php">Home page</a></li>
				<li><a href="#">Schedule</a></li>
				<li><a href="#">Imput score</a></li>
				<li><a href="#">Change Password</a></li>
			</ul>
		</div>

		<div class="mid">
			<h2>Search results for <?php echo $_POST['txtKeyWord'] ?> | <a style="color: #56A4FE;" href="Index.php">Close</a></h2>
			<table cellpadding="5px", cellspacing="0">
				<tr>
					<th width="5px">STT</th>
					<th width="80px">id Grup</td>
					<th width="50px">id Course</th>
					<th width="150px">Name Course</th>
					<th width="120px">Lecturers</th>
					<th width="60px">sem</th>
					<th colspan="2">Operation</th>
				</tr>
				<?php 
					for ($i=0; $i < sizeof($Function_search); $i++) { ?>
						<tr>
							<td><?php echo ($i+1); ?></td>
							<td><?php echo $Function_search[$i][0]?></td>
							<td><?php echo $Function_search[$i][1]?></td>	
							<td><?php echo $Function_search[$i][2]?></td>
							<td><?php echo $Function_search[$i][3]?></td>
							<td><?php echo $Function_search[$i][4]?></td>
							<td></td>
						</tr>
				<?php } ?>
				 
			</table>
			<div class="search">
				<form method="post" action="http://localhost/project/Function_Teacher/Display/View/Route.php?controller=search" >
					Find: <input type="text" name="txtKeyWord" placeholder="Enter information" value="<?php echo $_POST['txtKeyWord'] ?>">
					<input type="submit" name="btnSubmit" value="Find">
				</form>
			</div>
		</div>
	</div>
</body>
</html>