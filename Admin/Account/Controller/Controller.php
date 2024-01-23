<?php 
	include_once("../Model/Endity_Account.php");
	include_once("../Model/Model_Account.php");
	Class Account_Controller{
		public $M_Account;
		public function __construct(){
			$this->M_Account = new Model_Account();
		}	
		function edit(){
			include "../View/Update.php";
		}
		function update(){
			if (isset($_POST['btnSubmit'])) {
				$username = $_GET['username'];
				$password = $_POST['txtPassword'];
				$this->M_Account->update($password, $username);
			}
			else{
				echo "string";
			}
		}
		function search(){
			if (isset($_POST['btnSubmit'])){
				$keyWord = $_POST['txtKeyWord'];
				include_once '../Model/Model_Subject.php';
				$M_Subject = new Model_Subject();
				$Subject_search = $M_Subject->getByMaHp($keyWord);
				if($subject_search!=null){
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