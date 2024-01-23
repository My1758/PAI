<?php 
	include_once("../View/Route.php");
	Class Model_Class{
		public function __construct(){
		}

		public function getAll(){
			include 'dbConnection.php';
			$sql = "SELECT * FROM lop";
			$result = $conn->query($sql);
			$listClass = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					// code...
					$class = array(
						$row["maLop"], 
						$row["maKhoa"]);
					$listClass[] = $class;
				}
			}
			else{
				echo "No Data";
			}
			return $listClass;
		}		

		public function insert($maLop, $maKhoa){
			include_once 'dbConnection.php';	
			$sql = "INSERT INTO lop(maLop, maKhoa) values('".$maLop."', '".$maKhoa."');";
			$result = $conn->query($sql);
			if($result){
				echo '<script>
						alert("Successful");
						window.location="../View";
					</script>';
				mysqli_close();
			}
			else{

			}
		}
		
		public function delete($maLop){
			include_once 'dbConnection.php';
			$sql = "DELETE FROM lop WHERE maLop='".$maLop."'";
			$result = $conn->query($sql);
			if($result){
				echo '<script>
						alert("successful");
						window.location="../View";
					</script>';

			}
		}

		public function getByMaLop($maLop_check){
			include_once 'dbConnection.php';
			$sql = "SELECT * FROM lop WHERE maLop = '".$maLop_check."'";
			$result = $conn->query($sql);
			if($result->num_rows >0){
				if ($row = $result->fetch_array()) {
					$class = array(
						$row["maLop"], 
						$row["maKhoa"]);
					$listClass[] = $class;
					return $listClass;
				}
			}
			else{
				return $listClass = null;
			}
		}
	}
 ?>