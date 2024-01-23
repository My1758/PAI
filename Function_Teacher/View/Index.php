<?php 
	include 'checkLogin.php';
	include_once '../Model/Model_Function.php';
	$listFunction = [];
	$M_Function = new Model_Function();
	$listFunction = $M_Function->getAll();
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
					<td><a href="updatePassword.php">Change Password</a></td>
					<td><a onclick="return confirm('Are you sure you want to log out?')" href="http://localhost/project/Function_Teacher/View/Route.php?controller=logout">Log out</a></td>
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
				<li><a href="updatePassword.php">Change Password</a></li>
			</ul>
		</div>

		<div class="mid">
			<h2>Schedule</h2>
			<table cellpadding="5px", cellspacing="0">
				<tr>
					<th width="5px">STT</th>
					<th width="80px">id Grup</td>
					<th width="80px">id Course </th>
					<th width="120px">Name Course</th>
					<th width="160px">Lecturers</th>
					<th width="60px">sem</th>
					<th width="80px" colspan="3">Write</th>
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
							<td><a href="http://localhost/project/Function_Teacher/View/Route.php?controller=create&maLop=<?php echo $listFunction[$i][0] ?>&maHp=<?php echo $listFunction[$i][1]?>&hocky=<?php echo $listFunction[$i][4] ?>">process point</a></td>
							<td><a href="http://localhost/project/Function_Teacher/View/Route.php?controller=create2&maLop=<?php echo $listFunction[$i][0] ?>&maHp=<?php echo $listFunction[$i][1]?>&hocky=<?php echo $listFunction[$i][4] ?>">end point</a></td>
							<td><a href="http://localhost/project/Function_Teacher/View/Route.php?controller=edit&maLop=<?php echo $listFunction[$i][0] ?>&maHp=<?php echo $listFunction[$i][1]?>&hocky=<?php echo $listFunction[$i][4] ?>">fix</a></td>
						</tr>
				<?php } ?>
				 
			</table>
			<div class="search">
				<form method="post" action="http://localhost/project/Function_Teacher/Display/View/Route.php?controller=search" >
					Find: <input type="text" name="txtKeyWord" placeholder="Enter information">
					<input type="submit" name="btnSubmit" value="Find">
				</form>
			</div>
		</div>
	</div>
</body>
</html>