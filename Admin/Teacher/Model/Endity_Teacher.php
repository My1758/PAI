<?php 
	Class Endity_Teacher{
		private $maGv;
		private $hoTen;
		private $ngaySinh;
		private $diaChi;
		private $soDt;
		private $maKhoa;
		
		public function __construct($_maGv, $_hoTen, $_ngaySinh, $_diaChi, $_soDt, $_maKhoa){
			$this -> maGv = $_maGv;
			$this -> hoTen = $_hoTen;
			$this -> ngaySinh = $_ngaySinh;
			$this -> diaChi = $_diaChi;
			$this -> soDt = $_soDt;
			$this -> maKhoa = $_maKhoa;
		}

		public function getMaGv(){
			return $this -> maGv;
		}
		public function setMaGv($maGv){
			$this -> maGv = $maGv;
		}

		public function getHoTen(){
			return $this -> hoTen;
		}
		public function setHoTen($hoTen){
			$this -> hoTen = $hoTen;
		}

		public function getNgaySinh(){
			return $this -> ngaySinh;
		}
		public function setNgaySinh($ngaySinh){
			$this -> ngaySinh = $ngaySinh;
		}

		public function getDiaChi(){
			return $this -> diaChi;
		}
		public function setDiaChi($diaChi){
			$this -> diaChi = $diaChi;
		}

		public function getSoDt(){
			return $this -> soDt;
		}
		public function setSoDt($soDt){
			$this -> soDt = $soDt;
		}

		public function getMaKhoa(){
			return $this -> maKhoa;
		}
		public function setMaKhoa($maKhoa){
			$this -> maKhoa = $maKhoa;
		}
	}
 ?>