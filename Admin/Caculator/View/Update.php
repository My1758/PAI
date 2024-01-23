<?php 
	include '../../checkLogin.php';
	include_once '../Model/Model_Account.php';
	include_once '../Model/Endity_Account.php';
	$M_Account = new Model_Account();
	$account_edit = $M_Account->getByUserName($_GET['username']);
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
			<div class="updateForm" id="updateForm">
				<form action="http://localhost/project/Admin/Account/View/Route.php?controller=update&username=<?php echo $account_edit->getUserName() ?>" method="post">
					<br>
					<table>
						<tr>
							<td colspan="4">
								<h3>Change password <?php echo $account_edit->getUserName() ?> | <a href="Index.php">Close</a></h3>
							</td>
						</tr>
						<tr>
							<td>Username: </td>
							<td><input type="text" name="txtUserName" placeholder="username" readonly value="<?php echo $account_edit->getUserName() ?>"></td>
							<td>Password </td>
							<td><input type="text" name="txtPassword" placeholder="password" required value="<?php echo $account_edit->getPassWord() ?>"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<input type="submit" name="btnSubmit" value="submit">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>