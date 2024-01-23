<?php 
	include 'checkLogin.php';
	include_once '../Model/Model_Function.php';
	$listFunction = [];
	$M_Function = new Model_Function();
	$class = $M_Function->getIdClass($_SESSION['user']);
	$listFunction = $M_Function->getAll($class);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Student page</title>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
		<div class="menu">
			<table>
				<tr>
					<td><a href="Index.php">Home page</a></td>
					<td><a href="display.php">Checkpoint</a></td>	
					<td><a href="updatePassword.php">Change password</a></td>
					<td><a onclick="return confirm('Are you sure you want to log out?')" href="http://localhost/project/Function_Student/View/Route.php?controller=logout">Log out</a></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="main_display">
		<div class="left">
			<h2>Function	</h2>
			<ul>
				<li><a href="Index.php">Home page</a></li>
				<li><a href="display.php">Checkpoint</a></li>
				<li><a href="updatePassword.php">Change password</a></li>
			</ul>
		</div>

		<div class="mid">	
			<h2>Student study schedule</h2>
			<table cellpadding="5px", cellspacing="0">
				<tr>
					<th width="5px">STT</th>
					<th width="80px">code Grup</td>
					<th width="80px">Course code</th>
					<th width="120px">Course name</th>
					<th width="160px">Lecturers</th>
					<th width="60px">sem</th>
				</tr>
				<?php 
					for ($i=0; $i < sizeof($listFunction); $i++) { ?>
						<tr>
							<td><?php echo ($i+1); ?></td>
							<td><?php echo $listFunction[$i][0]?></td>
							<td><?php echo $listFunction[$i][1]?></td>
							<td><?php echo $listFunction[$i][2]?></td>
							<td><?php echo $listFunction[$i][3]?></td>
							<td><?php echo $listFunction[$i][4]?></td>
						</tr>
				<?php } ?>
				 
			</table>
			<div class="search">
				<form method="post" action="http://localhost/project/Function_Student/Display/View/Route.php?controller=search" >
					Find: <input type="text" name="txtKeyWord" placeholder="write information">
					<input type="submit" name="btnSubmit" value="Find">
				</form>
			</div>
		</div>
	</div>
</body>
</html>