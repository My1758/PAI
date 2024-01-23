<?php 
	include_once("../Model/Endity_Subject.php");
	include_once("../Model/Model_Subject.php");
	Class Subject_Controller{
		public $M_Subject;
		public function __construct(){
			$this->M_Subject = new Model_Subject();
		}	
		function index(){
			include_once "../View/Index.php";
		}
		function create(){
			include_once "../View/Create.php";
		}
		function store(){
			if (isset($_POST['btnSubmit'])) {
				$maHp = $_POST['txtMaHp'];
				$tenHp = $_POST['txtTenHocPhan'];
				$soTinChi = $_POST['txtSoTinChi'];
				$khoa = $_POST['txtKhoa'];
				$this->M_Subject->insert($maHp, $tenHp, $soTinChi, $khoa);
			}
		}
		function edit(){
			include_once "../View/Update.php";
		}
		function update(){
			if (isset($_POST['btnSubmit'])) {
				$maHp = $_GET['maHp'];
				$tenHp = $_POST['txtTenHocPhan'];
				$soTinChi = $_POST['txtSoTinChi'];
				$khoa = $_POST['txtKhoa'];
				$this->M_Subject->update($tenHp, $soTinChi, $khoa, $maHp);
			}
			else{
				echo "string";
			}
		}
		function delete(){
			$maHp = $_GET['maHp'];
			$this->M_Subject->delete($maHp);
		}
		function search(){
			if (isset($_POST['btnSubmit'])){
				$keyWord = $_POST['txtKeyWord'];
				include_once '../Model/Model_Subject.php';
				$M_Subject = new Model_Subject();
				$subject_search = $M_Subject->getByMaHp($keyWord);
				if($subject_search!=null){
					include_once "../View/Search.php";
				}
				else{
					echo '<script>
						alert("Không tìm thấy");
						window.location="../View";
					</script>';
				}
			}
			else{
				die();
			}
		}
	}
 ?>