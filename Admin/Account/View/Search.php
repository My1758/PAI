<?php include '../../checkLogin.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Student management page</title>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
		<div class="menu">
			<table>
				<tr>
					<td><a href="#">Home page</a></td>
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
				<li><a href="http://localhost/project/Student/View">Home page</a></li>
				<li><a href="#">Management Student</a></li>
				<li><a href="#">Management Lectur</a></li>
				<li><a href="#">Management Course</a></li>
				<li><a href="#">Management Account</a></li>
				<li><a href="#">Schedule</a></li>
				<li><a href="#">Statistical</a></li>
			</ul>
		</div>

		<div class="mid">
			<h2>Management Student</h2>
			<table cellpadding="5px", cellspacing="0">
				<tr>
					<th width="5px">STT</th>
					<th width="80px">id Student</td>
					<th width="170px">Name Student</th>
					<th width="100px">Date of Birth</th>
					<th width="100px">Address</th>
					<th width="150px">Faculty</th>
					<th colspan="2">Operation</th>
				</tr>
						<tr>
							<td>1</td>
							<td><?php echo $student_search->getMaSv() ?></td>
							<td><?php echo $student_search->getHoTen() ?></td>
							<td><?php echo $student_search->getNgaySinh() ?></td>
							<td><?php echo $student_search->getDiaChi() ?></td>
							<td><?php echo $student_search->getMaKhoa() ?></td>
							<td><a href="http://localhost/project/Student/View/Route.php?controller=student&method=edit&maSv=<?php echo $student_search->getMaSv() ?>">fix</a></td>
							<td><a href="http://localhost/project/Student/View/Route.php?controller=student&method=delete&maSv=<?php echo $student_search->getMaSv() ?>">delete</a></td>
						</tr>
			</table>
			<div class="search">
				<form>
					Find: <input type="text" name="txtKeyWord" placeholder="Write information" value="<?php echo $keyWord ?>">
					<input type="submit" value="Find">
				</form>
			</div>
		</div>
	</div>
</body>
</html>