<?php 
	include '../../checkLogin.php';
	include_once '../Model/Model_Teacher.php';
	$M_Teacher = new Model_Teacher();
	$teacher_edit = $M_Teacher->getByMaGv($_GET['maGv']);
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
			<div class="insertForm">
				<form method="post" action="http://localhost/project/Admin/Teacher/View/Route.php?controller=update&maGv=<?php echo $_GET['maGv'] ?>">
					<br>
					<table>
						<tr>
							<td colspan="4"><h3>Edit | <a href="Index.php">Close</a></h3></td>
						</tr>
						<tr>
							<td>Id Lecturer: </td>
							<td><input type="text" name="txtMaGv" placeholder="Mã giảng viên" required readonly value="<?php echo $teacher_edit->getMaGv() ?>"></td>
							<td>Name: </td>
							<td><input type="text" name="txtHoTen" placeholder="Họ và tên" required value="<?php echo $teacher_edit->getHoTen() ?>"></td>
						</tr>
						<tr>
							<td>Date of birth: </td>
							<td><input type="text" name="txtNgaySinh" placeholder="Ngày sinh" required value="<?php echo $teacher_edit->getNgaySinh() ?>"></td>
							<td>Address: </td>
							<td><input type="text" name="txtDiaChi" placeholder="Địa chỉ" required value="<?php echo $teacher_edit->getDiaChi() ?>"></td>
						</tr>
						<tr>
							<td>Phone: </td>
							<td><input type="text" name="txtSoDt" placeholder="Số điện thoại" required value="<?php echo $teacher_edit->getSoDt() ?>"></td>
							<td>Direction: </td>
							<td><input type="text" name="txtKhoa" placeholder="Khoa" required value="<?php echo $teacher_edit->getMaKhoa() ?>"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" name="btnSubmit" value="Submit"></td>
						</tr>
					</table>
				</form>
			</div>


		</div>
	</div>
</body>
</html>