<?php 
	include_once("../View/Route.php");
	Class Model{
		public function __construct(){
		}

		public function getAll(){
			include 'dbConnection.php';
			$sql = "SELECT `camthi`.*, `sinhvien`.`hoTen`, `hocphan`.`tenHp` FROM `camthi` LEFT JOIN `sinhvien` ON `camthi`.`maSV` = `sinhvien`.`maSV` LEFT JOIN `hocphan` ON `camthi`.`maHp` = `hocphan`.`maHp`;";
			$result = $conn->query($sql);
			$list = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					// code...
					$ct = array(
						$row['maSV'],
						$row['hoTen'],
						$row['maHp'],
						$row['tenHp'],
						$row['hocKy']
					);
					$list[] = $ct;
				}
			}
			else{
				echo "No Data";
			}
			return $list;
		}		

		public function search($key){
			include 'dbConnection.php';
			$sql = "SELECT `camthi`.*, `sinhvien`.`hoTen`, `hocphan`.`tenHp` FROM `camthi` LEFT JOIN `sinhvien` ON `camthi`.`maSV` = `sinhvien`.`maSV` LEFT JOIN `hocphan` ON `camthi`.`maHp` = `hocphan`.`maHp` WHERE `camthi`.`maSV`='".$key."' OR `camthi`.`maHp`='".$key."';";
			$result = $conn->query($sql);
			$list = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					// code...
					$ct = array(
						$row['maSV'],
						$row['hoTen'],
						$row['maHp'],
						$row['tenHp'],
						$row['hocKy']
					);
					$list[] = $ct;
				}
			}
			else{
				echo "No Data";
			}
			return $list;
		}	
		public function getTop(){
			include 'dbConnection.php';
			$sql = "";
			$result = $conn->query($sql);
			$list = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					// code...
					$ct = array(
						$row['maSV'],
						$row['hoTen'],
						$row['maHp'],
						$row['tenHp'],
						$row['hocKy']
					);
					$list[] = $ct;
				}
			}
			else{
				echo "No Data";
			}
			return $list;
		}		
		public function getHocKy(){
			include 'dbConnection.php';
			$sql = "SELECT DISTINCT `hocKy` FROM `bangdiem`;";
			$result = $conn->query($sql);
			$list = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					// code...
					$hk = $row['hocKy'];
					$list[] = $hk;
				}
			}
			else{
				echo "No Data";
			}
			return $list;
		}		
		public function getBangDiemTKByHK($hocky){
			include 'dbConnection.php';
			$sql = "SELECT `diemtongkethocky`.*, `sinhvien`.`hoTen`, `sinhvien`.`maLop` FROM `diemtongkethocky` LEFT JOIN `sinhvien` ON `diemtongkethocky`.`maSV` = `sinhvien`.`maSV` WHERE `diemtongkethocky`.`hocKy` = '".$hocky."' ORDER BY  `diemtongkethocky`.`diemtongket` DESC LIMIT 2;";
			$bangdiem=[];
			$result = $conn->query($sql);
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$bangdiem[] = array(
						$row['maSV'],
						$row['hoTen'],
						$row['maLop'],
						$row['diemtongket'],
						$row['hocky']
					);
				}
			}
			else{
				$bangdiem = null;
			}
			return $bangdiem;
		}
	}
 ?>