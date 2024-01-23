<?php 
	include_once("Endity_Student.php");
	include_once("../View/Route.php");
	Class Model_Student{
		public function __construct(){

		}

		public function getAll(){
			include 'dbConnection.php';
			$sql = "SELECT `sinhvien`.*, `khoa`.`tenKhoa` FROM `sinhvien` LEFT JOIN `khoa` ON `sinhvien`.`maKhoa` = `khoa`.`maKhoa`;";
			$result = $conn->query($sql);
			$listStudent = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					// code...
					$student = new Endity_Student($row["maSV"], 
						$row["hoTen"], 
						$row["ngaySinh"], 
						$row["diaChi"], 
						$row["maLop"],
						$row["tenKhoa"]);
					$listStudent[] = $student;
				}
			}
			else{
				echo "Không có dữ liệu";
			}
			return $listStudent;
		}		

		public function insert($maSv, $hoTen, $ngaySinh, $diaChi, $lop, $maKhoa){
			include 'dbConnection.php';
			$sql = "INSERT INTO sinhvien(maSV, hoTen, ngaySinh, diaChi, maLop, maKhoa) values('".$maSv."', '".$hoTen."', '".$ngaySinh."', '".$diaChi."', '".$lop."', '".$maKhoa."')";
			$result = $conn->query($sql);
			if($result){
				echo '<script>
						alert("Thêm thành công");
						window.location="../View";
					</script>';
				mysqli_close();
			}
			else{

			}
		}

		public function update($hoTen, $ngaySinh, $diaChi, $maKhoa, $maSv){
			include 'dbConnection.php';
			$sql = "UPDATE sinhvien SET hoTen= '".$hoTen."', ngaySinh= '".$ngaySinh."', diaChi= '".$diaChi."', maKhoa= '".$maKhoa."' WHERE maSV = '".$maSv."'";
			$result = $conn->query($sql);
			if($result){
				echo '<script>
						alert("Sửa thành công");
						window.location="../View";
					</script>';
			}
			else{
				die("Error");
			}
		}
		public function delete($maSv){
			include 'dbConnection.php';
			$sql = "DELETE FROM sinhvien WHERE maSV='".$maSv."'";
			$result = $conn->query($sql);
			if($result){
				echo '<script>
						alert("Xóa thành công");
						window.location="../View";
					</script>';
			}
		}

		public function getByMaSv($maSv_check){
			include 'dbConnection.php';
			$sql = "SELECT * FROM sinhvien WHERE maSV = '".$maSv_check."'";
			$result = $conn->query($sql);
			if ($result->num_rows>0) {
				if ($row = $result->fetch_array()) {
					$student = new Endity_Student(
						$row["maSV"], 
						$row["hoTen"], 
						$row["ngaySinh"], 
						$row["diaChi"],
						$row["maLop"], 
						$row["maKhoa"]); 
					return $student;
				}
				else{
					return $student = null;
				}
			}
		}
		public function getKhoa(){
			include 'dbConnection.php';
			$sql = "SELECT * FROM khoa";
			$result = $conn->query($sql);
			$listKhoa = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					// code...
					$khoa = array(
						$row["maKhoa"], 
						$row["tenKhoa"]);
					$listKhoa[] = $khoa;
				}
			}
			else{
				echo "Không có dữ liệu";
			}
			return $listKhoa;
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
	}
 ?>