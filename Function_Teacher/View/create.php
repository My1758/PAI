<?php 
	include 'checkLogin.php';
	include_once '../Model/Model_Function.php';
	$listCreate = [];
	$M_Function = new Model_Function();
	$listCreate = $M_Function->getStudent($_GET['maLop']);
	$_SESSION['student'] = $listCreate;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Instructor's page</title>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
		<div class="menu">
			<table>
				<tr>
					<td><a href="../../Index.php">Home page</a></td>
					<td><a href="#">Schedule</a></td>
					<td><a href="../../Insert/View">Input score</a></td>
					<td><a href="#">Change Password</a></td>
					<td><a onclick="return confirm('Are you sure you want to log out?')" href="http://localhost/project/Function_Teacher/Display/View/Route.php?controller=logout">Log out</a></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="main_display">
		<div class="left">
			<h2>Function	</h2>
			<ul>
				<li><a href="../../Index.php">Home page</a></li>
				<li><a href="#">Schedule</a></li>
				<li><a href="#">Input score</a></li>
				<li><a href="#">Change Password</a></li>
			</ul>
		</div>

		<div class="mid">
			<h2>Enter process points | <a href="Index.php">Close</a></h2>
			<form style="text-align: center;" method="post" action="http://localhost/project/Function_Teacher/View/Route.php?controller=store&maLop=70DCTT21&maHp=HP01">
				<table cellspacing="0">
					<tr>
						<th width="10px">STT</th>
						<th width="100px">id Student</th>
						<th width="150px">Name</th>
						<th width="80px">Grup</th>
						<th width="120px">Attendance</th>
						<th width="120px">Midterm</th>
					</tr>
					<?php for ($i=0; $i < sizeof($listCreate); $i++) { ?>
						<input type="hidden" name="txtHp" value="<?php echo $_GET['maHp'] ?>">
						<input type="hidden" name="txtHocKy" value="<?php echo $_GET['hocky'] ?>">
						<input type="hidden" name="txtLop" value="<?php echo $_GET['maLop'] ?>">
						<tr>
							<td><?php echo ($i+1) ?></td>
							<td><?php echo $listCreate[$i][0] ?></td>
							<td><?php echo $listCreate[$i][1] ?></td>
							<td><?php echo $listCreate[$i][2] ?></td>
							<input type="hidden" name="txtMaSv?id=<?php echo $i ?>" value="<?php echo $listCreate[$i][0] ?>">
							<td><input type="number" name="txtCC?id=<?php echo $i ?>" placeholder="Điểm CC" style="width: 90%;border: none; outline: none;" required></td>
							<td><input type="number" name="txtGK?id=<?php echo $i ?>" placeholder="Điểm GK" style="width: 90%;border: none; outline: none;" required></td>
						</tr>
					<?php } ?>
					<tr>
						<td colspan="6" style="border: none;"><input type="submit" name="btnSubmit" value="Input score" onclick="return confirm('Are you sure you want to enter points?')"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>