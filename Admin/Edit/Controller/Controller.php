<?php 
	include_once("../Model/Model_Plan.php");
	Class Plan_Controller{
		public $M_Plan;
		public function __construct(){
			$this->M_Plan = new Model_Plan();
		}	
		function create(){
			include_once "../View/Create.php";
		}
		function store(){
			if (isset($_POST['btnSubmit'])) {
				$maLop = $_POST['txtLop'];
				$maHp = $_POST['txtHocphan'];
				$maGv = $_POST['txtGiangVien'];
				$hocKy = $_POST['txtHocKy'];
				$check = $this->M_Plan->Check($maLop, $maHp);
				if ($check == null) {
					$this->M_Plan->insert($maLop, $maHp, $maGv, $hocKy);
				}
				else{
					echo '<script>
						alert("Lịch học đã tồn tại!!!");
					</script>';
				}
			}
		}
		function edit(){
			include_once "../View/Update.php";
		}
		
		function delete(){
			$maLop = $_GET['maLop'];
			$maHp = $_GET['maHp'];
			$this->M_Plan->delete($maLop, $maHp);
		}
		function search(){
			if (isset($_POST['btnSubmit'])){
				$keyWord = $_POST['txtKeyWord'];
				include_once '../Model/Model_Plan.php';
				$M_Plan = new Model_Plan();
				$plan_search = $M_Plan->getByMaLop($keyWord);
				if($plan_search!=null){
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
		function accept(){
			$malop = $_GET['maLop'];
			$maHp = $_GET['maHp'];
			$stt = 2;
			$this->M_Plan->accept($stt, $malop, $maHp);
			echo '<script>
				alert("Cấp quyền thành công!!!");
				window.location="../View";
			</script>';
		}
	}
 ?>