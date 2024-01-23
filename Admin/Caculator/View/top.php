<?php 
	include '../../checkLogin.php';
	include_once '../Model/Model.php';
	$list = [];
	$Model = new Model();
	$list = $Model->getHocKy();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Management Student page</title>
	<style type="text/css">
		.mid table{
			width: 50%;
			margin: 0 auto;
			border: none;
		}
		.mid table td{
			border: none;
		}
		.mid input{
			width: 60px;
			height: 30px;
		}
	</style>
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
			<h2>List of semester scholarship recipients | <a style="color: #56A4FE;" href="Index.php">Close</a></h2>
			<form method="post" action="http://localhost/project/Admin/Caculator/View/Route.php?controller=search1">
				<table>
					<tr>
						<td width="120px">
							<h3>Find Sem</h3>
						</td>
						<td>
							<select name="txtHocKy" style="width: 100%;height: 30px;">
								<?php for ($i=0; $i < sizeof($list); $i++) { ?>
									<option value="<?php echo $list[$i] ?>"><?php echo $list[$i] ?></option>
								<?php } ?>
							</select>
						</td>
						<td><input type="submit" name="btnSubmit" value="Find"></td>
					</tr>
				</table>
			</form>
		</div>

		</div>
	</div>
</body>
</html>