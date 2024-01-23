<?php include '../../checkLogin.php'; ?>
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
					<td><a href="http://localhost/project/Subject/View">Home page</a></td>
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
			<h2>Find Course | <a style="color: #56A4FE;" href="Index.php">Close</a></h2>
			<table cellpadding="5px", cellspacing="0">
				<tr>
					<th width="5px">STT</th>
					<th width="100px">Id Course</td>
					<th width="250px">Name Course</th>
					<th width="100px">Number of credits</th>
					<th width="150px">Direction</th>
					<th colspan="2">Operation</th>
				</tr>
						<tr>
							<td>1</td>
							<td><?php echo $subject_search->getMaHp() ?></td>
							<td><?php echo $subject_search->getTenHp() ?></td>
							<td><?php echo $subject_search->getSoTinChi() ?></td>
							<td><?php echo $subject_search->getMaKhoa() ?></td>
							<td><a href="http://localhost/project/Admin/Subject/View/Route.php?controller=edit&maHp=<?php echo $subject_search->getMaHp() ?>">Edit</a></td>
							<td><a href="http://localhost/project/Admin/Subject/View/Route.php?controller=delete&maHp=<?php echo $subject_search->getMaHp() ?>" onclick="return confirm('Do you want to delete?')">Delete</a></td>
						</tr>
				 
			</table>
			<div class="search">
				<form method="post" action="http://localhost/project/Admin/Subject/View/Route.php?controller	=search">
					Find: <input type="text" name="txtKeyWord" placeholder="Information" value="<?php echo $subject_search->getMaHp() ?>">
					<input type="submit" name="btnSubmit" value="Find">
				</form>
			</div>
		</div>
	</div>
</body>
</html>