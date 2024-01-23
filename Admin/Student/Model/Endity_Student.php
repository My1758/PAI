<?php 
	Class Endity_Student{
		private $maSv;
		private $hoTen;
		private $ngaySinh;
		private $diaChi;
		private $maLop;
		private $maKhoa;
		
		public function __construct($_maSv, $_hoTen, $_ngaySinh, $_diaChi, $_maLop, $_maKhoa){
			$this -> maSv = $_maSv;
			$this -> hoTen = $_hoTen;
			$this -> ngaySinh = $_ngaySinh;
			$this -> diaChi = $_diaChi;
			$this -> maLop = $_maLop;
			$this -> maKhoa = $_maKhoa;
		}

		public function getMaSv(){
			return $this -> maSv;
		}
		public function setMaSv($maSv){
			$this -> maSv = $maSv;
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

		public function getMaLop(){
			return $this -> maLop;
		}
		public function setMaLop($maLop){
			$this -> maLop = $maLop;
		}

		public function getMaKhoa(){
			return $this -> maKhoa;
		}
		public function setMaKhoa($maKhoa){
			$this -> maKhoa = $maKhoa;
		}
	}
 ?>