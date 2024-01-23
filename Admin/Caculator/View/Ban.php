<?php 
	include '../../checkLogin.php';
	include_once '../Model/Model.php';
	$list = [];
	$Model = new Model();
	$list = $Model->getAll();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Student Management Page</title>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
		<div class="menu">
			<table>
				<tr>
					<td><a href="#">Home Page</a></td>
					<td><a href="#">Management Student</a></td>
					<td><a href="#">Management Lectur</a></td>
					<td><a href="#">Management Course</a></td>
					<td><a href="#">Management Account</a></td>
					<td><a href="#">Schedule</a></td>
					<td><a href="#">Statistical</a></td>
					<td><a href="#">Log out</a></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="main_display">
		<div class="left">
			<h2>Function	</h2>
			<ul>
				<li><a href="#">Home page</a></li>
				<li><a href="#">Management Student</a></li>
				<li><a href="#">Management Lectur</a></li>
				<li><a href="#">Management Course</a></li>
				<li><a href="#">Management Account</a></li>
				<li><a href="#">Schedule</a></li>
				<li><a href="#">Statistical</a></li>
			</ul>
		</div>

		<div class="mid">
			<h2>List of students banned from exams | <a style="color: #56A4FE;" href="Index.php">Close</a></h2>
			<table cellpadding="5px", cellspacing="0">
				<tr>
					<th width="5px">STT</th>
					<th width="80px">Id Student</td>
					<th width="150px">Name Student</th>
					<th width="100px">Code Course</th>
					<th width="150px">Name Course</th>
					<th width="100px">Sem</th>
				</tr>
				<?php 
					for ($i=0; $i < sizeof($list); $i++) { ?>
						<tr>
							<td><?php echo ($i+1); ?></td>
							<td><?php echo $list[$i][0] ?></td>
							<td><?php echo $list[$i][1] ?></td>
							<td><?php echo $list[$i][2] ?></td>
							<td><?php echo $list[$i][3] ?></td>
							<td><?php echo $list[$i][4] ?></td>
						</tr>
				<?php } ?>
				 
			</table>
			<div class="search">
				<form method="post" action="http://localhost/project/Admin/Caculator/View/Route.php?controller=search" >
					Find: <input type="text" name="txtKeyWord" placeholder="Write information">
					<input type="submit" name="btnSubmit" value="Find">
				</form>
			</div>
		</div>

		</div>
	</div>
</body>
</html>