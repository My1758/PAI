<?php 
	Class Endity_Account{
		private $userName;
		private $passWord;
		private $vaiTro;
		
		public function __construct($_userName, $_passWord, $_vaiTro){
			$this -> userName = $_userName;
			$this -> passWord = $_passWord;
			$this -> vaiTro = $_vaiTro;
		}

		public function getUserName(){
			return $this -> userName;
		}
		public function setUserName($userName){
			$this -> userName = $userName;
		}

		public function getPassWord(){
			return $this -> passWord;
		}
		public function setPassWord($passWord){
			$this -> passWord = $passWord;
		}

		public function getVaiTro(){
			return $this -> vaiTro;
		}
		public function setVaiTro($vaiTro){
			$this -> vaiTro = $vaiTro;
		}
	}
 ?>