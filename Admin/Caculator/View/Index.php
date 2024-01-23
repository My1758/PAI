<?php include '../../checkLogin.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Admin Page</title>
	<style type="text/css">
		button{
			width: 100%;
			height: 90px;
		}
		.insetForm table{
			width: 70%;
			margin: 0 auto;
			border: none;
		}
		.insetForm table td{
			width: 100px;
			border: none;
			padding: 10px;
		}
	</style>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
		<div class="menu">
			<table>
				<tr>
					<td><a href="http://localhost/project/Admin">Home page</a></td>
					<td><a href="#">Management Student</a></td>
					<td><a href="#">Management Lecturer</a></td>
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
				<li><a href="http://localhost/project/Admin">Home page</a></li>
				<li><a href="#">Management Student</a></li>
				<li><a href="#">Management Lecturer</a></li>
				<li><a href="#">Management Course</a></li>
				<li><a href="#">Management Account</a></li>
				<li><a href="#">Schedule</a></li>
				<li><a href="#">Statistical</a></li>
			</ul>
		</div>

		<div class="mid">
			<div class="insetForm" style="text-align: center;">
				<h3 style="color: #56A4FE;">Select the category that needs statistics</h3>
				<table>
					<tr>
						<td width="300px">
							<a href="http://localhost/project/Admin/Caculator/View/Ban.php"><button>Statistics of students retaking the exam</button></a>
						</td>
						<td width="300px"><a href="http://localhost/project/Admin/Caculator/View/top.php"><button>Statistics of students receiving scholarships</button></a></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>