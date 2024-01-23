<?php 
	include '../../checkLogin.php';
	include_once '../Model/Model_Student.php';
	$M_Student = new Model_Student();
	$student_edit = $M_Student->getByMaSv($_GET['maSv']);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Management Student page</title>
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
			<div class="updateForm" id="updateForm">
				<form action="http://localhost/project/Admin/Student/View/Route.php?controller=update&maSv=<?php echo $student_edit->getMaSv() ?>" method="post">
					<br>
					<table>
						<tr>
							<td colspan="4">
								<h3>Edit <?php echo $student_edit->getMaSv(); ?> | <a href="Index.php">Close</a></h3>
							</td>
						</tr>
						<tr>
							<td>Id Student: </td>
							<td><input type="text" name="txtMaSv" placeholder="Id Student" readonly value="<?php echo $student_edit->getMaSv();?>"></td>
							<td>Name: </td>
							<td><input type="text" name="txtHoTen" placeholder="Name" value="<?php echo $student_edit->getHoTen();?>"></td>
						</tr>
						<tr>
							<td>Date of birth: </td>
							<td><input type="text" name="txtNgaySinh" placeholder="Date of birth" value="<?php echo $student_edit->getNgaysinh();?>"></td>
							<td>Address: </td>
							<td><input type="text" name="txtDiaChi" placeholder="Address" value="<?php echo $student_edit->getDiaChi();?>"></td>
						</tr>
						<tr>
							<td>Direction: </td>
							<td><input type="text" name="txtKhoa" placeholder="Direction" value="<?php echo $student_edit->getMaKhoa();?>"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<input type="submit" name="btnSubmit" value="Submit">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>