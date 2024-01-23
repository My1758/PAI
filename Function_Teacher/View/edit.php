<?php 
	include 'checkLogin.php';
	include_once '../Model/Model_Function.php';
	$listStudent = [];
	$M_Function = new Model_Function();
	$listStudent = $M_Function->getStudent($_GET['maLop']);
	$_SESSION['student'] = $listStudent;
	$listGetData = $M_Function->getBangDiem($_GET['maHp'], $_GET['maLop']);
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
			<h2>Edit points | <a href="Index.php">Close</a></h2>
			<form style="text-align: center;" method="post" action="http://localhost/project/Function_Teacher/View/Route.php?controller=store2&maLop=<?php echo $_GET['maLop'] ?>&maHp=<?php echo $_GET['maHp'] ?>&hocky=<?php echo $_GET['hocky'] ?>">
				<table cellspacing="0">
					<tr>
						<th width="10px">STT</th>
						<th width="100px">id Student</th>
						<th width="150px">Name</th>
						<th width="80px">Grup</th>
						<th width="120px">Attendance</th>
						<th width="120px">Midterm</th>
						<th width="120px">End of term</th>
						<th width="80px">Note</th>
					</tr>
					<?php for ($i=0; $i < sizeof($listStudent); $i++) { ?>
						<input type="hidden" name="txtHp" value="<?php echo $_GET['maHp'] ?>">

						<tr>
							<td><?php echo ($i+1) ?></td>
							<td><?php echo $listStudent[$i][0] ?></td>
							<td><?php echo $listStudent[$i][1] ?></td>
							<td><?php echo $listStudent[$i][2] ?></td>
							<input type="hidden" name="txtMaSv?id=<?php echo $i ?>" value="<?php echo $listStudent[$i][0] ?>">
							<td><input type="number" name="txtCC?id=<?php echo $i ?>" placeholder="Điểm CC" style="width: 90%;border: none; outline: none;" required readonly value="<?php echo $listGetData[$i][0] ?>"></td>
							<td><input type="number" name="txtGK?id=<?php echo $i ?>" placeholder="Điểm GK" style="width: 90%;border: none; outline: none;" required readonly value="<?php echo $listGetData[$i][1] ?>"></td>
							<td><input type="number" name="txtCK?id=<?php echo $i ?>" placeholder="Điểm GK" style="width: 90%;border: none; outline: none;" required value="<?php echo $listGetData[$i][2] ?>"></td>
							<td><?php echo $listGetData[$i][3] ?></td>
						</tr>
					<?php } ?>
					<tr>
						<td colspan="8" style="border: none;"><input onclick="return confirm('Are you sure you want to enter points?')" type="submit" name="btnSubmit" value="Input score"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>