<?php 
	include '../../checkLogin.php';
	include_once '../Model/Model_Plan.php';
	$M_Plan = new Model_Plan();
	$listTeacher = $M_Plan -> getTeacher();
	$listSubject = $M_Plan -> getSubject();
	$listClass = $M_Plan->getClass();
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
			<div class="insertForm" id="insertForm">
				<form method="post" action="http://localhost/project/Admin/Plan/View/Route.php?controller=store">
					<br>
					<table>
						<tr>
							<td colspan="4"><h3>Add Schedule | <a href="Index.php">Close</a></h3></td>
						</tr>
						<tr>
							<td>Group: </td>
							<td>
								<select name="txtLop" style="width: 100%; height: 30px;">
									<?php for ($i=0; $i < sizeof($listClass); $i++) { 
										?>
										<option value="<?php echo $listClass[$i][0] ?>"><?php echo $listClass[$i][0] ?></option>
									<?php } ?>
								</select>
							</td>
							<td>Course: </td>
							<td>
								<select name="txtHocphan" style="width: 94%; height: 30px; margin-left: 8px;">
									<?php for ($i=0; $i < sizeof($listSubject); $i++) { 
										?>
										<option value="<?php echo $listSubject[$i][0] ?>"><?php echo $listSubject[$i][1] ?></option>
									<?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Lecturers: </td>
							<td>
								<select name="txtGiangVien" style="width: 100%; height: 30px;">
									<?php for ($i=0; $i < sizeof($listTeacher); $i++) { 
										?>
										<option value="<?php echo $listTeacher[$i][0] ?>"><?php echo $listTeacher[$i][1] ?></option>
									<?php } ?>
								</select>
							</td>
							<td>Sem: </td>
							<td><input type="text" name="txtHocKy" placeholder="VD: 1_2022_2023" required></td>
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