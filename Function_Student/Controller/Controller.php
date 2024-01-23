<?php 
	include_once("../Model/Model_Function.php");
	Class Function_Controller{
		public $M_Function;
		public function __construct(){
			$this->M_Function = new Model_Function();
		}	
		function logout(){
			session_start();
			session_destroy();
			echo '<script>
				alert("Log out successfully");
				window.location="http://localhost/project/Login";
			</script>';
			exit();
		}
		function search(){
			if (isset($_POST['btnSubmit'])){
				$keyWord = $_POST['txtKeyWord'];
				include_once '../Model/Model_Function.php';
				$M_Function = new Model_Function();
				$Function_search = $M_Function->search($keyWord);
				if($Function_search!=null){
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
		function updatepassword(){
			session_start();
			$oldpass = $_POST['txtOldPass'];
			$newpass = $_POST['txtNewPass'];
			$cnewpass = $_POST['txtCNewPass'];
			$acc = $this->M_Function->getAcc($_SESSION['user'], $oldpass);
			if ($acc!=null) {
				if ($newpass == $cnewpass) {
					$this->M_Function->updatePassword($newpass, $_SESSION['user']);
					echo '<script>
						alert("Password change successful, please log in again");
						window.location="http://localhost/project/Function_Teacher/View/Route.php?controller=logout";
					</script>';
				}
				else{
					echo '<script>
						alert("The two passwords do not match!");
					</script>';
				}
			}
			else{
				echo '<script>
					alert("Wrong password!");
				</script>';
			}
		}
		function dtb(){
			
		}
		function dtbhk(){
			
		}
	}

 ?>