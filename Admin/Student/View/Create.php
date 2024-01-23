<?php 
	include '../../checkLogin.php';
	include_once '../Model/Model_Student.php';
	$M_Student = new Model_Student();
	$listKhoa = $M_Student->getKhoa();
	$listClass = $M_Student->getClass();
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
			<h2>Function	</h2>
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
				<form method="post" action="http://localhost/project/Admin/Student/View/Route.php?controller=store">
					<br>
					<table>
						<tr>
							<td colspan="4"><h3>Add Student | <a href="Index.php">Close</a></h3></td>
						</tr>
						<tr>
							<td>Id Student: </td>
							<td><input type="text" name="txtMaSv" placeholder="Id Student" value="SV" required></td>
							<td>Name: </td>
							<td><input type="text" name="txtHoTen" placeholder="Name" required></td>
						</tr>
						<tr>
							<td>Date of birth: </td>
							<td><input style="width: 92%; height: 30px;margin-left: 7px;" type="date" name="txtNgaySinh" placeholder="Date of birth" required></td>
							<td>Address: </td>
							<td><input type="text" name="txtDiaChi" placeholder="Address" required></td>
						</tr>
						<tr>
							<td>Group: </td>
							<td>
								<select name="txtLop" style="width: 94%; height: 30px;margin-left: 7px;">
									<?php for ($i=0; $i < sizeof($listClass); $i++) { 
										?>
										<option value="<?php echo $listClass[$i][0] ?>"><?php echo $listClass[$i][0] ?></option>
									<?php } ?>
								</select>
							</td>
							<td>Direction: </td>
							<td>
								<select name="txtKhoa" style="width: 94%; height: 30px;margin-left: 7px;">
									<?php for ($i=0; $i < sizeof($listKhoa); $i++) { 
										?>
										<option value="<?php echo $listKhoa[$i][0] ?>"><?php echo $listKhoa[$i][1] ?></option>
									<?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" name="btnSubmit" value="Add"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>