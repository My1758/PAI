<?php
	include_once "../View/Route.php";
	Class Model_Function{
		public function __construct(){
		}

		public function getAll(){
			include 'dbConnection.php';
			$sql = "SELECT `kehoach`.*, `hocphan`.`tenHp`, `giangvien`.`hoTen` FROM `kehoach` LEFT JOIN `hocphan` ON `kehoach`.`maHp` = `hocphan`.`maHp` LEFT JOIN `giangvien` ON `kehoach`.`maGv` = `giangvien`.`maGv` WHERE `giangvien`.`maGv`='".$_SESSION['user']."';";
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

		public function getStudent($maLop){
			include 'dbConnection.php';
			$sql = "SELECT `sinhvien`.* FROM `sinhvien` WHERE maLop='".$maLop."';";
			$result = $conn->query($sql);
			$listClass = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$class = array(
						$row["maSV"], 
						$row["hoTen"], 
						$row['maLop']);
					$listClass[] = $class;
				}
			}
			else{
				echo "Không có dữ liệu";
			}
			return $listClass;
		}	
		public function getStudentId($maLop){
			include 'dbConnection.php';
			$sql = "SELECT `sinhvien`.* FROM `sinhvien` WHERE maLop='".$maLop."';";
			$result = $conn->query($sql);
			$listClass = [];
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$class = $row['maSV'];
					$listClass[] = $class;
				}
			}
			else{
				echo "Không có dữ liệu";
			}
			return $listClass;
		}	
			
		public function create1($maSv, $maHp, $maLop, $diemcc, $diemgk, $hocky, $note){
			include 'dbConnection.php';
			$sql = "INSERT INTO `bangdiem`(`maSV`, `maHP`, `maLop`, `diemCc`, `diemGk`, `hocKy`, `note`) VALUES ('".$maSv."', '".$maHp."', '".$maLop."', '".$diemcc."', '".$diemgk."', '".$hocky."', '".$note."');";
			$result = $conn->query($sql);
		}
		public function getStt($maHp, $maLop){
			include 'dbConnection.php';
			$sql = "SELECT DISTINCT `stt` FROM `bangdiem` WHERE maHp='".$maHp."' AND maLop = '".$maLop."';";
			$result = $conn->query($sql);
			if($result->num_rows >0){
				if ($row = $result->fetch_array()) {
					$stt = $row["stt"];
				}
			}
			else{
				$stt = null;
			}
			return $stt;
		}
		public function getBangDiem($maHp, $maLop)
		{
			include 'dbConnection.php';
			$sql = "SELECT * FROM `bangdiem` WHERE maHp='".$maHp."' AND maLop = '".$maLop."';";
			$result = $conn->query($sql);
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$bangdiem[] = array($row['diemCc'],$row['diemGk'], $row['diemCk'], $row['note']);
				}
			}
			else{
				$bangdiem = null;
			}
			return $bangdiem;
		}

		public function createFinal($diemck, $diemtongket, $diemchu, $stt, $maHp, $maSv){
			include 'dbConnection.php';
			$sql = "UPDATE `bangdiem` SET `diemCk`='".$diemck."',`diemTongket`='".$diemtongket."',`diemChu`='".$diemchu."',`stt`='".$stt."' WHERE maHp = '".$maHp."' AND maSV = '".$maSv."';";
			$result = $conn->query($sql);
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
		public function updateDTB($dtb, $hebon, $xeploai, $maSv)
		{
			include 'dbConnection.php';
			$sql = "UPDATE `diemtongket` SET `diemTbcTL`='".$dtb."',`diemHeBon`='".$hebon."',`xepLoai`='".$xeploai."' WHERE maSV = '".$maSv."';";
			$result = $conn->query($sql);
		}
		public function getSTC($maSv)
		{
			include 'dbConnection.php';
			$stc = [];
			$sql = "SELECT `bangdiem`.*, `hocphan`.`soTinChi` FROM `bangdiem` LEFT JOIN `hocphan` ON `bangdiem`.`maHP` = `hocphan`.`maHp` WHERE `bangdiem`.`maSv` = '".$maSv."';";
			$result = $conn->query($sql);
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$stc[] = $row["soTinChi"];
				}
			}
			else{
				$stc = null;
			}
			return $stc;
		}
		public function getSTC1($maSv,$hocky)
		{
			include 'dbConnection.php';
			$stc = [];
			$sql = "SELECT `bangdiem`.*, `hocphan`.`soTinChi` FROM `bangdiem` LEFT JOIN `hocphan` ON `bangdiem`.`maHP` = `hocphan`.`maHp` WHERE `bangdiem`.`maSv` = '".$maSv."' AND `bangdiem`.`hocKy` = '".$hocky."';";
			$result = $conn->query($sql);
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$stc[] = $row["soTinChi"];
				}
			}
			else{
				$stc = null;
			}
			return $stc;
		}
		public function getAllBangDiem($maSv){
			include 'dbConnection.php';
			$sql = "SELECT * FROM `bangdiem` WHERE maSV = '".$maSv."';";
			$bangdiem=[];
			$result = $conn->query($sql);
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$bangdiem[] = $row['diemTongket'];
				}
			}
			else{
				$bangdiem = null;
			}
			return $bangdiem;
		}
		public function createCT($maSv, $maHp, $hocky){
			include 'dbConnection.php';
			$sql = "INSERT INTO camthi VALUES('".$maSv."', '".$maHp."', '".$hocky."');";
			$result = $conn->query($sql);
		}
		public function createHK($maSv, $hocky){
			include 'dbConnection.php';
			$sql = "INSERT INTO diemtongkethocky(maSV, hocKy) VALUES('".$maSv."', '".$hocky."');";
			$result = $conn->query($sql);
		}
		public function getBangDiemByHK($maSv, $hocky){
			include 'dbConnection.php';
			$sql = "SELECT * FROM `bangdiem` WHERE maSV = '".$maSv."' AND hocKy = '".$hocky."';";
			$bangdiem=[];
			$result = $conn->query($sql);
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$bangdiem[] = $row['diemTongket'];
				}
			}
			else{
				$bangdiem = null;
			}
			return $bangdiem;
		}
		public function updateHK($diemtongket, $maSv, $hocky){
			include 'dbConnection.php';
			$sql = "UPDATE `diemtongkethocky` SET `diemtongket`='".$diemtongket."' WHERE maSV = '".$maSv."' AND hocKy='".$hocky."';";
			$result = $conn->query($sql);
		}
		public function getBangDiemTKByHK($maSv, $hocky){
			include 'dbConnection.php';
			$sql = "SELECT * FROM `diemtongkethocky` WHERE maSV = '".$maSv."' AND hocKy = '".$hocky."';";
			$bangdiem=[];
			$result = $conn->query($sql);
			if($result->num_rows >0){
				while ($row = $result->fetch_assoc()) {
					$bangdiem[] = $row['diemTongket'];
				}
			}
			else{
				$bangdiem = null;
			}
			return $bangdiem;
		}
}
 ?>