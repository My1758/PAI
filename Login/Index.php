<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
	<style type="text/css">
		*{
			margin: 0;
			font-family: "Time News Roman";
		}
		.header{
			width: 100%;
			height: 80px;
			background-color: #56A4FE;
			display: inline-flex;
		}
		.header h3{
			color: white;
			line-height: 80px;
			text-indent: 20px;
		}
		.form{
			width: 400px;
			min-height: 200px;
			border: 1px solid #DDD;
			margin: 100px auto;
			border-radius: 20px;
			text-align: center;
		}
		.form table{
			margin: 0 auto;
			padding: 10px;
		}
		.form table td{
			padding: 5px;
		}
		input{
			height: 20px;
			border-radius: 15px;
			border: 0.25px solid;
			outline: none;
			text-indent: 5px;
		}
		input[type="submit"]{
			width: 100%;
			height: 30px;
			border: none;
			background-color: #56A4FE;
		}
	</style>
</head>
<body>
	<div class="header">
		<h3>UNIVERSITY OF TECHNOLOGY</h3>
	</div>

	<div class="main">
		<div class="form">
			<form action="Route.php?method=checkLogin" method="post">
				<table>
					<tr>
						<td colspan="2"><h3>LOGIN</h3></td>
					</tr>
					<tr>
						<td style="text-align: left;">username: </td>
						<td><input type="text" name="txtUsername" placeholder="username"></td>
					</tr>
					<tr>
						<td style="text-align: left;">password: </td>
						<td><input type="password" name="txtPassword" placeholder="password"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="btnSubmit" value="Login"></td>
					</tr>
					<tr>
						<td colspan="2"><a href="#">forgot password</a></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>