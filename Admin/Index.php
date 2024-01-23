<?php 
	include 'checkLogin.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Class/View/Style/style.css">
	<title>Class management page</title>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
		<div class="menu">
			<table>
				<tr>
					<td><a href="Index.php">Home page</a></td>
					<td><a href="Student/View">Management Student</a></td>
					<td><a href="Teacher/View">Management Lecturer</a></td>
					<td><a href="Subject/View">Management Course</a></td>
					<td><a href="Account/View">Management Account </a></td>
					<td><a href="Plan/View">Schedule</a></td>
					<td><a href="Caculator/View">Statistical</a></td>
					<td><a onclick="return confirm('Are you sure you want to log out?')" href="http://localhost/project/Admin/logout.php">Log out</a></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="main_display">
		<div class="left">
			<h2>Function	</h2>
			<ul>
				<li><a href="Index.php">Home page</a></li>
				<li><a href="Student/View">Management Student</a></li>
				<li><a href="Teacher/View">Management Lecturer</a></li>
				<li><a href="Subject/View">Management Course</a></li>
				<li><a href="Account/View">Management Account</a></li>
				<li><a href="Plan/View">Schedule</a></li>
				<li><a href="Caculator/View">Statistical</a></li>
				<li><a href="Edit/View">Edit points</a></li>
			</ul>
		</div>

		<div class="mid">
			
		</div>
	</div>
</body>
</html>