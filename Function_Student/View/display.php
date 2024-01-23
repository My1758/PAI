<?php 
	include 'checkLogin.php';
	include_once '../Model/Model_Function.php';
	$listFunction = [];
	$M_Function = new Model_Function();
	$listFunction = $M_Function->getAllBangDiem($_SESSION['user']);
	$listHK = $M_Function->getBangDiemTKByHK($_SESSION['user']);
	$listTB = $M_Function->getDiemTB($_SESSION['user']);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Trang của sinh viên</title>
	<style type="text/css">
		.mid table#tableParrent{
			border: none;
			margin-top: -20px;
		}
		.mid table#tableParrent td{
			border: none;
		}
		.mid table#tableChildren{
			vertical-align: top;
			width: 100%; 
			float: left; 
			text-align: center;
			border: 0.25px solid black; 
		}
		.mid table#tableChildren td{
			text-align: center;
			border: 0.25px solid black; 
			padding: 5px;
		}
		.mid table#maintable tr:nth-child(even){
			background-color: #D7EAFF;
		}
		.mid table#maintable tr:nth-child(odd){
			
		}
		.mid table#maintable th{
			background-color: white;
		}
	</style>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
		<div class="menu">
			<table>
				<tr>
					<td><a href="Index.php">Home page</a></td>
					<td><a href="#">Checkpoint</a></td>	
					<td><a href="updatePassword.php">Change password</a></td>
					<td><a onclick="return confirm('Are you sure you want to log out?')" href="http://localhost/project/Function_Student/View/Route.php?controller=logout">Log out</a></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="main_display">
		<div class="left">
			<h2>Function	</h2>
			<ul>
				<li><a href="Index.php">Home page</a></li>
				<li><a href="#">Checkpoint</a></li>
				<li><a href="updatePassword.php">Change password</a></li>
			</ul>
		</div>

		<div class="mid">
			<div class="top">
				<h2>Final score sheet</h2>
				<table id="tableParrent">
					<tr>
						<td>
							<table id="tableChildren" cellspacing="0" >
								<tr>
									<th colspan="2">Summary by semester</th>
								</tr>
								<tr>
									<th width="100px">Semester</th>
									<th width="70px">Final score</th>
								</tr>
								<?php for ($i=0; $i < sizeof($listHK) ; $i++) { ?>
									<tr>
										<td><?php echo $listHK[$i][0] ?></td>
										<td><?php echo $listHK[$i][1] ?></td>
									</tr>
								<?php } ?>
							</table>
						</td>
						<td>
							<table id="tableChildren" cellspacing="0">
								<tr>
									<th colspan="2">Accumulated average mark</th>
								</tr>
								<tr>
									<td>Point</td>
									<td><?php echo $listTB[0][0] ?></td>
								</tr>
								<tr>
									<td>System 4 points</td>
									<td><?php echo $listTB[0][1] ?></td>
								</tr>
								<tr>
									<td>Classification</td>
									<td><?php echo $listTB[0][2] ?></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>

			<div class="bottom" style="margin-top: 20px;">
				<h2 style="width: 100%;">Academic transcript</h2>
				<table cellpadding="5px", cellspacing="0" id="maintable">
					<tr>
						<th width="5px">STT</th>
						<th width="80px">Course code </th>
						<th width="120px">Course name</th>
						<th width="30px">Number of credits</th>
						<th width="50px">Attendance</th>
						<th width="50px">Midterm score</th>
						<th width="50px">Final egzamin</th>
						<th width="50px">Final grade</th>
						<th width="50px">Letter Grade</th>
						<th width="60px">Sem</th>
					</tr>
					<?php 
						for ($i=0; $i < sizeof($listFunction); $i++) { ?>
							<tr>
								<td><?php echo ($i+1); ?></td>
								<td><?php echo $listFunction[$i][0]?></td>
								<td><?php echo $listFunction[$i][1]?></td>
								<td><?php echo $listFunction[$i][2]?></td>
								<td><?php echo $listFunction[$i][3]?></td>
								<td><?php echo $listFunction[$i][4]?></td>
								<td><?php echo $listFunction[$i][5]?></td>
								<td><?php echo $listFunction[$i][6]?></td>
								<td><?php echo $listFunction[$i][7]?></td>
								<td><?php echo $listFunction[$i][8]?></td>	
							</tr>
					<?php } ?>
				</table>
			</div>
			</div>
	</div>
</body>
</html>