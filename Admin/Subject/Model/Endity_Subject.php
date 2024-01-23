<?php 
	Class Endity_Subject{
		private $maHp;
		private $tenHp;
		private $soTinChi;
		private $maKhoa;
		public function __construct($_maHp, $_tenHp, $_soTinChi, $_maKhoa){
			$this -> maHp = $_maHp;
			$this -> tenHp = $_tenHp;
			$this -> soTinChi = $_soTinChi;
			$this -> maKhoa = $_maKhoa;
		}

		public function getMaHp(){
			return $this -> maHp;
		}
		public function setMaHp($maHp){
			$this -> maHp = $maHp;
		}

		public function getTenHp(){
			return $this -> tenHp;
		}
		public function setTenHp($tenHp){
			$this -> tenHp = $tenHp;
		}

		public function getSoTinChi(){
			return $this -> soTinChi;
		}
		public function setSoTinChi($soTinChi){
			$this -> soTinChi = $soTinChi;
		}

		public function getMaKhoa(){
			return $this -> maKhoa;
		}
		public function setMaKhoa($maKhoa){
			$this -> maKhoa = $maKhoa;
		}
	}
 ?>