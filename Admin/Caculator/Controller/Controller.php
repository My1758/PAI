<?php 
	include_once("../Model/Model.php");
	Class Account_Controller{
		public $Model;
		public function __construct(){
			$this->Model = new Model();
		}	
		function search(){
			if (isset($_POST['btnSubmit'])){
				$keyWord = $_POST['txtKeyWord'];
				$search = $this->Model->search($keyWord);
				if($search!=null){
					include_once "../View/Search.php";
				}
				else{
					include_once "../View/Index.php";
				}
			}
			else{
				die();
			}
		}
		function search1(){
			if (isset($_POST['btnSubmit'])) {
				$hocky = $_POST['txtHocKy'];
				$bangdiem = $this->Model->getBangDiemTKByHK($hocky);
				include_once 'Search.php';
			}
		}
	}
 ?>