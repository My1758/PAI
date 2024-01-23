<?php 
	include_once("../Model/Model_Class.php");
	Class Class_Controller{
		public $M_Class;
		public function __construct(){
			$this->M_Class = new Model_Class();
		}	
		function index(){
			include_once "../View/Index.php";
		}
		function create(){
			include_once "../View/Create.php";
		}
		function store(){
			if (isset($_POST['btnSubmit'])) {
				$maLop = $_POST['txtMaLop'];
				$khoa = $_POST['txtMaKhoa'];
				$this->M_Class->insert($maLop, $khoa);
			}
		}
		function edit(){
			include_once "../View/Update.php";
		}
		function delete(){
			$maLop = $_GET['maLop'];
			$this->M_Class->delete($maLop);
		}
		function search(){
			if (isset($_POST['btnSubmit'])){
				$keyWord = $_POST['txtKeyWord'];
				include_once '../Model/Model_Class.php';
				$M_Class = new Model_Class();
				$Class_search = $M_Class->getByMaLop($keyWord);
				if($Class_search!=null){
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
	}
 ?>