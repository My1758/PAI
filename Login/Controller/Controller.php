<?php 
	include_once 'Model/Model_Login.php';	
	include_once 'Model/Endity_Account.php';
	Class Login_Controller{
		public $M_Login;
		public function __construct(){
			$this->M_Login = new Model_Login();
		}	
		function store(){
			if (isset($_POST['btnSubmit'])) {
				$username = $_POST['txtUsername'];
				$password = $_POST['txtPassword'];
				$acc = $this -> M_Login -> getAcc($username, $password);
				$_SESSION['user']="1";
				if ($acc != null) {
					if ($acc->getVaiTro()=="admin") {
						echo '<script>
								window.location="http://localhost/project/Admin/Login.php?maGv='.$acc->getUserName().'";
							</script>';
					}
					else if ($acc->getVaiTro()=="giangvien") {
						echo '<script>
								window.location="http://localhost/project/Function_Teacher/View/Login.php?maGv='.$acc->getUserName().'";
							</script>';
					}
					else if ($acc->getVaiTro()=="sinhvien") {
						echo '<script>
								window.location="http://localhost/project/Function_Student/View/Login.php?maSv='.$acc->getUserName().'";
							</script>';
					}
				}
				else{
					echo '<script>
								alert("Login failed, please check your information again!!");
								window.location="Index.php";
							</script>';
				}
			}
		}
}
 ?>