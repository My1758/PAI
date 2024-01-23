<?php 
	include '../../checkLogin.php';
	include_once '../Model/Model_Student.php';
	$listStudent = [];
	$M_Student = new Model_Student();
	$listStudent = $M_Student->getAll();
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
					<td><a href="../../Index.php">Home page</a></td>
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
				<li><a href="../../Index.php">Home page</a></li>
				<li><a href="#">Management Student</a></li>
				<li><a href="#">Management Lecturers</a></li>
				<li><a href="#">Management Course</a></li>
				<li><a href="#">Management Account</a></li>
				<li><a href="#">Schedule</a></li>
				<li><a href="#">Statistical</a></li>
			</ul>
		</div>

		<div class="mid">
			<h2>Management Student | <a style="color: #56A4FE;" href="http://localhost/project/Admin/Student/View/Route.php?controller=create">Add</a></h2>
			<table cellpadding="5px", cellspacing="0">
				<tr>
					<th width="5px">STT</th>
					<th width="80px">Id Student</td>
					<th width="170px">Name</th>
					<th width="100px">Date of birth</th>
					<th width="100px">Address</th>
					<th>Group</th>
					<th width="150px">Direction</th>
					<th colspan="2">Operation</th>
				</tr>
				<?php 
					for ($i=0; $i < sizeof($listStudent); $i++) { ?>
						<tr>
							<td><?php echo ($i+1); ?></td>
							<td><?php echo $listStudent[$i]->getMaSv() ?></td>
							<td><?php echo $listStudent[$i]->getHoTen() ?></td>
							<td><?php echo $listStudent[$i]->getNgaySinh() ?></td>
							<td><?php echo $listStudent[$i]->getDiaChi() ?></td>
							<td><?php echo $listStudent[$i]->getMaLop() ?></td>
							<td><?php echo $listStudent[$i]->getMaKhoa() ?></td>
							<td><a href="http://localhost/project/Admin/Student/View/Route.php?controller=edit&maSv=<?php echo $listStudent[$i]->getMaSv() ?>">Edit</a></td>
							<td><a onclick="return confirm('Do you want to delete?')" href="http://localhost/project/Admin/Student/View/Route.php?controller=delete&maSv=<?php echo $listStudent[$i]->getMaSv() ?>">Delete</a></td>
						</tr>
				<?php } ?>
				 
			</table>
			<div class="search">
				<form method="post" action="http://localhost/project/Admin/Student/View/Route.php?controller=search" >
					Find: <input type="text" name="txtKeyWord" placeholder="Information">
					<input type="submit" name="btnSubmit" value="Find">
				</form>
			</div>
		</div>
	</div>
</body>
</html>