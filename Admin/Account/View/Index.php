<?php 
	include '../../checkLogin.php';
	include_once '../Model/Model_Account.php';
	$listAccount = [];
	$M_Account = new Model_Account();
	$listAccount = $M_Account->getAll();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Student management page</title>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
		<div class="menu">
			<table>
				<tr>
					<td><a href="../../Index.php">Home page</a></td>
					<td><a href="#">Management Student</a></td>
					<td><a href="#">Management Lectur</a></td>
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
				<li><a href="#">Management Lectur</a></li>
				<li><a href="#">Management Course</a></li>
				<li><a href="#">Management Account</a></li>
				<li><a href="#">Schedule</a></li>
				<li><a href="#">Statistical</a></li>
			</ul>
		</div>

		<div class="mid">
			<h2>Management Account | <a style="color: #56A4FE;" href="http://localhost/project/Account/View/Route.php?controller=create">Add</a></h2>
			<table cellpadding="5px", cellspacing="0">
				<tr>
					<th width="5px">STT</th>
					<th width="250px">username</td>
					<th width="250px">Password</th>
					<th width="100px">Role</th>
					<th colspan="2">Operation</th>
				</tr>
				<?php 
					for ($i=0; $i < sizeof($listAccount); $i++) { ?>
						<tr>
							<td><?php echo ($i+1); ?></td>
							<td><?php echo $listAccount[$i]->getUserName() ?></td>
							<td><?php echo $listAccount[$i]->getPassWord() ?></td>
							<td><?php echo $listAccount[$i]->getVaiTro() ?></td>
							<td><a href="http://localhost/project/Admin/Account/View/Route.php?controller=edit&username=<?php echo $listAccount[$i]->getUserName() ?>">edit</a></td>
						</tr>
				<?php } ?>
				 
			</table>
			<div class="search">
				<form method="post" action="http://localhost/project/Account/View/Route.php?controller=Account&method=search" >
					Find: <input type="text" name="txtKeyWord" placeholder="write information">
					<input type="submit" name="btnSubmit" value="Find">
				</form>
			</div>
		</div>
	</div>
</body>
</html>