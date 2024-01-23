<?php 
	include '../../checkLogin.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Management Lecturers page</title>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
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
				<li><a href="../View">Home page</a></li>
				<li><a href="#">Management Student</a></li>
				<li><a href="#">Management Lecturers</a></li>
				<li><a href="#">Management Course</a></li>
				<li><a href="#">Management Account</a></li>
				<li><a href="#">Schedule</a></li>
				<li><a href="#">Statistical</a></li>
			</ul>
		</div>

		<div class="mid">
			<h2>Management Lecturers | <a href="Index.php">Close</a></h2>
			<table cellpadding="5px", cellspacing="0">
				<tr>
					<th width="5px">STT</th>
					<th width="80px">Id Lecturer</td>
					<th width="170px">Name</th>
					<th width="100px">Date of birth</th>
					<th width="100px">Address</th>
					<th width="100px">Phone</th>
					<th width="150px">Direction</th>
					<th colspan="2">Operation</th>
				</tr>
						<tr>
							<td>1</td>
							<td><?php echo $teacher_search->getMaGv() ?></td>
							<td><?php echo $teacher_search->getHoTen() ?></td>
							<td><?php echo $teacher_search->getNgaySinh() ?></td>
							<td><?php echo $teacher_search->getDiaChi() ?></td>
							<td><?php echo $teacher_search->getSoDt() ?></td>
							<td><?php echo $teacher_search->getMaKhoa() ?></td>
							<td><a href="http://localhost/project/Admin/Teacher/View/Route.php?controller=edit&maGv=<?php echo $teacher_search->getMaGv() ?>">Edit</a></td>
							<td><a onclick="return confirm('Do you want to delete?')" href="http://localhost/project/Teacher/View/Route.php?controller=delete&maGv=<?php echo $teacher_search->getMaGv() ?>">Delete</a></td>
						</tr>
			</table>
			<div class="search">
				<form>
					Find: <input type="text" name="txtKeyWord" placeholder="Information" value="<?php echo $keyWord ?>">
					<input type="submit" value="Find">
				</form>
			</div>
		</div>
	</div>
</body>
</html>