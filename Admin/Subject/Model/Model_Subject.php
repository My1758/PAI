<?php 
	include_once("Endity_Subject.php");
	include_once("../View/Route.php");
	Class Model_Subject{
		public function __construct(){
		}

		public function getAll(){
			include 'dbConnection.php';
			$sql = "SELECT * FROM hocphan";
			$result = $conn->query($sql);
			$listSubject = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					// code...
					$subject = new Endity_Subject(
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

		public function insert($maHp, $tenHp, $soTinChi, $maKhoa){
			include_once 'dbConnection.php';
			$sql = "INSERT INTO hocphan(maHp, tenHp, soTinChi, maKhoa) values('".$maHp."', '".$tenHp."', '".$soTinChi."', '".$maKhoa."')";
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

		public function update($tenHp, $soTinChi, $maKhoa, $maHp){
			include_once 'dbConnection.php';
			$sql = "UPDATE hocphan SET tenHp= '".$tenHp."', soTinChi= '".$soTinChi."', maKhoa= '".$maKhoa."' WHERE maHp = '".$maHp."'";
			$result = $conn->query($sql);
			if($result){
				echo '<script>
						alert("Cập nhật thành công");
						window.location="../View";
					</script>';
				echo "OK";
			}
			else{
				die("Error");
			}
		}
		public function delete($maHp){
			include_once 'dbConnection.php';
			$sql = "DELETE FROM hocphan WHERE maHp='".$maHp."'";
			$result = $conn->query($sql);
			if($result){
				echo '<script>
						alert("Xóa thành công");
						window.location="../View";
					</script>';

			}
		}

		public function getByMaHp($maHp_check){
			include_once 'dbConnection.php';
			$sql = "SELECT * FROM hocphan WHERE maHp = '".$maHp_check."'";
			$result = $conn->query($sql);
			if ($result->num_rows>0) {
				if ($row = $result->fetch_array()) {
					$subject = new Endity_Subject(
						$row["maHp"], 
						$row["tenHp"], 
						$row["soTinChi"], 
						$row["maKhoa"]); 
					return $subject;
				}
				else{
					
				}
			}
		}
	}
 ?>