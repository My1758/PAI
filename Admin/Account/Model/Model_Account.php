<?php 
	include_once("Endity_Account.php");
	include_once("../View/Route.php");
	Class Model_Account{
		public function __construct(){
		}

		public function getAll(){
			include 'dbConnection.php';
			$sql = "SELECT * FROM taikhoan";
			$result = $conn->query($sql);
			$listAccount = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					// code...
					$account = new Endity_Account(
						$row["userName"], 
						$row["passWord"], 
						$row["vaiTro"]);
					$listAccount[] = $account;
				}
			}
			else{
				echo "No Data";
			}
			return $listAccount;
		}		

		public function update($password, $username){
			include_once 'dbConnection.php';
			$sql = "UPDATE taikhoan SET passWord= '".$password."' WHERE userName = '".$username."'";
			$result = $conn->query($sql);
			if($result){
				echo '<script>
						alert("Successful");
						window.location="../View";
					</script>';
				echo "OK";
			}
			else{
				die("Error");
			}
		}
		public function delete($username){
			include_once 'dbConnection.php';
			$sql = "DELETE FROM taikhoan WHERE userName='".$username."'";
			$result = $conn->query($sql);
			if($result){
				echo '<script>
						alert("successful");
						window.location="../View";
					</script>';
			}
		}

		public function getByUserName($username_check){
			include 'dbConnection.php';
			$sql = "SELECT * FROM taikhoan WHERE userName = '".$username_check."';";
			$result = $conn->query($sql);
			if($result->num_rows >0){
				if ($row = $result->fetch_assoc()) {
					// code...
					$account = new Endity_Account(
						$row["userName"], 
						$row["passWord"], 
						$row["vaiTro"]);
					$listAccount = $account;
				}
			}
			else{
				echo "No Data";
			}
			return $listAccount;
		}
	}
 ?>