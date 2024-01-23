<?php 
	include 'checkLogin.php';
	include_once '../Model/Model_Function.php';
	
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Instructor's page</title>
	<style type="text/css">
		.mid table td{
			border: none;
			padding: 5px;
		}
		.mid table{
			width: 50%;
			margin: 20px auto;
			text-align: left;
			padding: 10px;
		}
		.mid input[type="password"]{
			height: 25px;
			border-radius: 10px;
			outline: none;
			border: solid 0.25px;
			text-indent: 5px;
		}
	</style>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
		<div class="menu">
			<table>
				<tr>
					<td><a href="../../Index.php">Home page</a></td>
					<td><a href="#">Schedule</a></td>	
					<td><a href="#">Change Password</a></td>
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
				<li><a href="#">Change Password</a></li>
			</ul>
		</div>

		<div class="mid">
			<h2>Change Password | <a href="Index.php">Close</a></h2>
			<form method="post" action="http://localhost/project/Function_Teacher/View/Route.php?controller=updatepassword">
				<table cellspacing="0" style="border: none;">
					<tr>
						<td width="200px">old password:</td>
						<td ><input type="password" name="txtOldPass" placeholder="old password" required></td>
					</tr>
					<tr>
						<td>new password:</td>
						<td><input type="password" name="txtNewPass" placeholder="new password" required></td>
					</tr>
					<tr>
						<td>repeat new password:</td>
						<td><input type="password" name="txtCNewPass" placeholder="repeat new password" required></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" name="btnSubmit" value="submit"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>