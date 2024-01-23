<?php include '../../checkLogin.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Management Student Page</title>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
		<div class="menu">
			<table>
				<tr>
					<td><a href="#">Home page</a></td>
					<td><a href="#">Management Student</a></td>
					<td><a href="#">Management Lecturer</a></td>
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
				<li><a href="#">Management Lecturer</a></li>
				<li><a href="#">Management Course</a></li>
				<li><a href="#">Management Account</a></li>
				<li><a href="#">Schedule</a></li>
				<li><a href="#">Statistical</a></li>
			</ul>
		</div>

		<div class="mid">
			<h2>List of semester scholarship recipients <?php echo $bangdiem[0][4] ?> | <a href="Index.php">Close</a></h2>
			
			<table cellpadding="5px", cellspacing="0">
				<tr>
					<th width="5px">STT</th>
					<th width="80px">Id Student</td>
					<th width="150px">Name Student</th>
					<th width="100px">Group</th>
					<th width="150px">End point</th>
					<th width="100px">Sem</th>
				</tr>
				<?php 
					for ($i=0; $i < sizeof($bangdiem); $i++) { ?>
						<tr>
							<td><?php echo ($i+1); ?></td>
							<td><?php echo $bangdiem[$i][0] ?></td>
							<td><?php echo $bangdiem[$i][1] ?></td>
							<td><?php echo $bangdiem[$i][2] ?></td>
							<td><?php echo $bangdiem[$i][3] ?></td>
							<td><?php echo $bangdiem[$i][4] ?></td>
						</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</body>
</html>