<?php 
	include_once("Endity_Teacher.php");
	include_once("../View/Route.php");
	Class Model_Teacher{
		public function __construct(){
		}

		public function getAll(){
			include 'dbConnection.php';
			$sql = "SELECT * FROM giangvien";
			$result = $conn->query($sql);
			$listTeacher = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$teacher = new Endity_Teacher(
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

		public function insert($maGv, $hoTen, $ngaySinh, $diaChi, $soDt, $maKhoa){
			include 'dbConnection.php';
			$sql = "INSERT INTO giangvien(maGv, hoTen, ngaySinh, diaChi, soDt, maKhoa) values('".$maGv."', '".$hoTen."', '".$ngaySinh."', '".$diaChi."', '".$soDt."', '".$maKhoa."')";
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

		public function update($hoTen, $ngaySinh, $diaChi, $soDt, $maKhoa, $maGv){
			include_once 'dbConnection.php';
			$sql = "UPDATE giangvien SET hoTen= '".$hoTen."', ngaySinh= '".$ngaySinh."', diaChi= '".$diaChi."', soDt = '".$soDt."', maKhoa= '".$maKhoa."' WHERE maGv = '".$maGv."'";
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
		public function delete($maGv){
			include 'dbConnection.php';
			$sql = "DELETE FROM giangvien WHERE maGv='".$maGv."'";
			$result = $conn->query($sql);
			if($result){
				echo '<script>
						alert("Xóa thành công");
						window.location="../View";
					</script>';
				}
		}

		public function getByMaGv($maGv_check){
			include_once 'dbConnection.php';
			$sql = "SELECT * FROM giangvien WHERE maGv = '".$maGv_check."'";
			$result = $conn->query($sql);
			if ($result->num_rows>0) {
				if ($row = $result->fetch_array()) {
					$teacher = new Endity_Teacher(
						$row["maGv"], 
						$row["hoTen"], 
						$row["ngaySinh"], 
						$row["diaChi"], 
						$row["soDt"], 
						$row["maKhoa"]); 
					return $teacher;
				}
				else{
					return $teacher = null;
				}
			}
		}
	}
 ?>