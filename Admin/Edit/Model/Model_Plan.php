<?php 
	include_once "../View/Route.php";
	Class Model_Plan{
		public function __construct(){
		}

		public function getAll(){
			include 'dbConnection.php';
			$sql = "SELECT `kehoach`.*, `hocphan`.`tenHp`, `giangvien`.`hoTen` FROM `kehoach` LEFT JOIN `hocphan` ON `kehoach`.`maHp` = `hocphan`.`maHp` LEFT JOIN `giangvien` ON `kehoach`.`maGv` = `giangvien`.`maGv`;";
			$result = $conn->query($sql);
			$listPlan = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$plan = array(
						$row["maLop"], 
						$row["maHp"], 
						$row['tenHp'],
						$row["hoTen"],
						$row["hocKy"]);
					$listPlan[] = $plan;
				}
			}
			else{
				echo "Không có dữ liệu";
			}
			return $listPlan;
		}		
		public function insert($maLop, $maHp, $maGv, $hocKy){
			include 'dbConnection.php';
			$sql = "INSERT INTO `kehoach`(`maLop`, `maHp`, `maGv`, `hocKy`) VALUES ('".$maLop."', '".$maHp."', '".$maGv."', '".$hocKy."');";
			$result = $conn->query($sql);
			if ($result) {
				echo '<script>
						alert("Thêm thành công");
						window.location="../View";
					</script>';
				echo "OK";
			}
		}
		public function delete($maLop, $maHp){
			include_once 'dbConnection.php';
			$sql = "DELETE FROM kehoach WHERE maLop='".$maLop."' AND maHp='".$maHp."';";
			$result = $conn->query($sql);
			if($result){
				echo '<script>
						alert("Xóa thành công");
						window.location="../View";
					</script>';
			}
		}
		public function getByMaLop($maLop){
			include 'dbConnection.php';
			$sql = "SELECT `kehoach`.*, `hocphan`.`tenHp`, `giangvien`.`hoTen` FROM `kehoach` LEFT JOIN `hocphan` ON `kehoach`.`maHp` = `hocphan`.`maHp` LEFT JOIN `giangvien` ON `kehoach`.`maGv` = `giangvien`.`maGv` WHERE maLop = '".$maLop."';";
			$result = $conn->query($sql);
			$listPlan = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$plan = array(
						$row["maLop"], 
						$row["maHp"], 
						$row['tenHp'],
						$row["hoTen"],
						$row["hocKy"]);
					$listPlan[] = $plan;
				}
			}
			else{
				echo "Không có dữ liệu";
			}
			return $listPlan;
		}		

		public function getTeacher(){
			include 'dbConnection.php';
			$sql = "SELECT * FROM giangvien";
			$result = $conn->query($sql);
			$listTeacher = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$teacher = array(
						$row["maGv"], 
						$row["hoTen"], 
						$row["ngaySinh"], 
						$row["diaChi"], 
						$row["soDt"], 
						$row["maKhoa"]);
					$listTeacher[] = $teacher;
				}
			}
			else{
				echo "Không có dữ liệu";
			}
			return $listTeacher;	
		}
		public function getSubject(){
			include 'dbConnection.php';
			$sql = "SELECT * FROM hocphan";
			$result = $conn->query($sql);
			$listSubject = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					// code...
					$subject = array(
						$row["maHp"], 
						$row["tenHp"], 
						$row["soTinChi"], 
						$row["maKhoa"]);
					$listSubject[] = $subject;
				}
			}
			else{
				echo "Không có dữ liệu";
			}
			return $listSubject;
		}
		public function getClass(){
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
				echo "Không có dữ liệu";
			}
			return $listClass;
		}		
		public function Check($maLop, $maHp)
		{
			include 'dbConnection.php';
			$sql = "SELECT `kehoach`.*, `hocphan`.`tenHp`, `giangvien`.`hoTen` FROM `kehoach` LEFT JOIN `hocphan` ON `kehoach`.`maHp` = `hocphan`.`maHp` LEFT JOIN `giangvien` ON `kehoach`.`maGv` = `giangvien`.`maGv` WHERE maLop = '".$maLop."' AND `kehoach`.`maHp` = '".$maHp."';";
			$result = $conn->query($sql);
			$listPlan = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$plan = array(
						$row["maLop"], 
						$row["maHp"], 
						$row['tenHp'],
						$row["hoTen"],
						$row["hocKy"]);
					$listPlan[] = $plan;
				}
			}
			else{
				echo "Không có dữ liệu";
				$listPlan=null;
			}
			return $listPlan;
		}
		public function accept($stt, $maLop, $maHp)
		{
			include 'dbConnection.php';
			$sql = "UPDATE `bangdiem` SET `stt`='".$stt."' WHERE maLop = '".$maLop."' AND maHp = '".$maHp."';";
			$result = $conn->query($sql);
		}
	}
 ?>