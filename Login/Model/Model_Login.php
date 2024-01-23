<?php 
	include_once("Endity_Account.php");
	include_once("Route.php");
	Class Model_Login{
		public function __construct(){
		}
		public function getAcc($username, $password){
			include 'dbConnection.php';
			$sql = "SELECT * FROM taikhoan WHERE userName = '".$username."' AND passWord = '".$password."';";
			$result = $conn->query($sql);
			if ($result->num_rows>0) {
				if ($row = $result->fetch_array()) {
					$acc = new Endity_Account(
						$row["userName"], 
						$row["passWord"], 
						$row["vaiTro"]); 
					return $acc;
				}
				else{
					$acc = null;
					return $acc;
				}
		}
	}
}
 ?>