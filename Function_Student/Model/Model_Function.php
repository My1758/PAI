<?php
	include_once "../View/Route.php";
	Class Model_Function{
		public function __construct(){
		}

		public function getIdClass($maSV)
		{
			include 'dbConnection.php';
			$sql = "SELECT `maLop` FROM `sinhvien` WHERE maSV = '".$maSV."'; ";
			$result = $conn->query($sql);
			$class = null;
			if($result->num_rows >0){
				if ($row = $result->fetch_array()) {
					$class = $row['maLop'];
				}
			}
			else{
				echo "Không có dữ liệu";
			}
			return $class;
		}

		public function getAll($maLop){
			include 'dbConnection.php';
			$sql = "SELECT `kehoach`.*, `hocphan`.`tenHp`, `giangvien`.`hoTen` FROM `kehoach` LEFT JOIN `hocphan` ON `kehoach`.`maHp` = `hocphan`.`maHp` LEFT JOIN `giangvien` ON `kehoach`.`maGv` = `giangvien`.`maGv` WHERE `kehoach`.`maLop`='".$maLop."';";
			$result = $conn->query($sql);
			$listFunction = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$Function = array(
						$row["maLop"], 
						$row["maHp"], 
						$row['tenHp'],
						$row["hoTen"],
						$row["hocKy"]);
					$listFunction[] = $Function;
				}
			}
			else{
				echo "Không có dữ liệu";
			}
			return $listFunction;
		}		
		public function search($key){
			include 'dbConnection.php';
			$sql = "SELECT `kehoach`.*, `hocphan`.`tenHp`, `giangvien`.`hoTen` FROM `kehoach` LEFT JOIN `hocphan` ON `kehoach`.`maHp` = `hocphan`.`maHp` LEFT JOIN `giangvien` ON `kehoach`.`maGv` = `giangvien`.`maGv` WHERE `hocphan`.`maHp`='".$key."' OR `kehoach`.`maLop`='".$key."';";
			$result = $conn->query($sql);
			$listFunction = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$Function = array(
						$row["maLop"], 
						$row["maHp"], 
						$row['tenHp'],
						$row["hoTen"],
						$row["hocKy"]);
					$listFunction[] = $Function;
				}
			}
			else{
				echo "Không có dữ liệu";
			}
			return $listFunction;
		}
		public function getAcc($username, $password){
			include 'dbConnection.php';
			$sql = "SELECT * FROM taikhoan WHERE userName = '".$username."' AND passWord = '".$password."';";
			$result = $conn->query($sql);
			if($result->num_rows >0){
				if ($row = $result->fetch_array()) {
					$acc = array(
						$row["userName"], 
						$row["passWord"]);
				}
			}
			else{
				$acc = null;
			}
			return $acc;
		}
		public function updatePassword($password, $username)
		{
			include 'dbConnection.php';
			$sql = "UPDATE `taikhoan` SET `passWord`='".$password."' WHERE userName = '".$username."';";
			$result = $conn->query($sql);
		}
		public function getAllBangDiem($maSv){
			include 'dbConnection.php';
			$sql = "SELECT `bangdiem`.*, `hocphan`.`tenHp`, `hocphan`.`soTinChi` FROM `bangdiem` LEFT JOIN `hocphan` ON `bangdiem`.`maHP` = `hocphan`.`maHp` WHERE `bangdiem`.`maSV` = '".$maSv."';";
			$bangdiem=[];
			$result = $conn->query($sql);
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$bangdiem[] = array(
						$row['maHP'],
						$row['tenHp'],
						$row['soTinChi'],
						$row['diemCc'],
						$row['diemGk'],
						$row['diemCk'],
						$row['diemTongket'],
						$row['diemChu'],
						$row['hocKy'],
						$row['note'],
					);
				}
			}
			else{
				$bangdiem = null;
			}
			return $bangdiem;
		}
		public function getBangDiemTKByHK($maSv){
			include 'dbConnection.php';
			$sql = "SELECT * FROM `diemtongkethocky` WHERE maSV = '".$maSv."';";
			$bangdiem=[];
			$result = $conn->query($sql);
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$bangdiem[] = array($row['hocky'], $row['diemtongket']);
				}
			}
			else{
				$bangdiem = null;
			}
			return $bangdiem;
		}
		public function getDiemTB($maSv){
			include 'dbConnection.php';
			$sql = "SELECT * FROM `diemtongket` WHERE maSV = '".$maSv."';";
			$bangdiem=[];
			$result = $conn->query($sql);
			if($result->num_rows >0){
				if ($row = $result->fetch_assoc()) {
					$bangdiem[] =array($row['diemTbcTL'], $row['diemHeBon'], $row['xepLoai']);
				}
			}
			else{
				$bangdiem = null;
			}
			return $bangdiem;
		}
}
 ?>