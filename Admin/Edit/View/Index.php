<?php 
	include '../../checkLogin.php';
	include_once '../Model/Model_Plan.php';
	$listPlan = [];
	$M_Plan = new Model_Plan();
	$listPlan = $M_Plan->getAll();
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
			<h2>Function	</h2>
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
			<h2>Management Schedule</h2>
			<table cellpadding="5px", cellspacing="0">
				<tr>
					<th width="5px">STT</th>
					<th width="80px">Id Group</td>
					<th width="50px">Id Course</th>
					<th width="150px">Name Course</th>
					<th width="120px">Lecturers</th>
					<th width="60px">Sem</th>
					<th width="70px">Edit point</th>
				</tr>
				<?php 
					for ($i=0; $i < sizeof($listPlan); $i++) { ?>
						<tr>
							<td><?php echo ($i+1); ?></td>
							<td><?php echo $listPlan[$i][0]?></td>
							<td><?php echo $listPlan[$i][1]?></td>
							<td><?php echo $listPlan[$i][2]?></td>
							<td><?php echo $listPlan[$i][3]?></td>
							<td><?php echo $listPlan[$i][4]?></td>
							<td><a onclick="return confirm('Bạn có chắc chắn cho phép sửa điểm của lớp này??')" href="http://localhost/project/Admin/Edit/View/Route.php?controller=accept&maLop=<?php echo $listPlan[$i][0] ?>&maHp=<?php echo $listPlan[$i][1] ?>">Grant permissions</a></td>
						</tr>
				<?php } ?>
				 
			</table>
			<div class="search">
				<form method="post" action="http://localhost/project/Admin/Plan/View/Route.php?controller=search" >
					Find: <input type="text" name="txtKeyWord" placeholder="Information">
					<input type="submit" name="btnSubmit" value="Find">
				</form>
			</div>
		</div>
	</div>
</body>
</html>