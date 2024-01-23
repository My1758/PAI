<?php include '../../checkLogin.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Management group page</title>
</head>
<body>
	<div class="header">
		<h3></h3>
		<div class="menu">
			<table>
				<tr>
					<td><a href="#">Home page</a></td>
					<td><a href="#">Management Student</a></td>
					<td><a href="#">Management Lecturers</a></td>
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
			<h2>Function</h2>
			<ul>
				<li><a href="#">Home page</a></li>
				<li><a href="#">Management Student</a></li>
				<li><a href="#">Management Lecturers</a></li>
				<li><a href="#">Management Course</a></li>
				<li><a href="#">Management Account</a></li>
				<li><a href="#">Schedule</a></li>
				<li><a href="#">Statistical</a></li>
			</ul>
		</div>

		<div class="mid">
			<div class="insertForm" id="insertForm">
				<form method="post" action="http://localhost/project/Admin/Subject/View/Route.php?controller=store">
					<br>
					<table>
						<tr>
							<td colspan="4"><h3>Add Group | <a href="Index.php">Close</a></h3></td>
						</tr>
						<tr>
							<td>Id Course: </td>
							<td><input type="text" name="txtMaHp" placeholder="Id Course" required></td>
							<td>Name Course: </td>
							<td><input type="text" name="txtTenHocPhan" placeholder="Name Course" required></td>
						</tr>
						<tr>
							<td>Number of credits: </td>
							<td><input type="text" name="txtSoTinChi" placeholder="Number of credits" required></td>
							<td>Direction: </td>
							<td><input type="text" name="txtKhoa" placeholder="Direction" required></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" name="btnSubmit" value="Thêm"></td>
						</tr>
					</table>
				</form>
			</div>


		</div>
	</div>
</body>
</html>