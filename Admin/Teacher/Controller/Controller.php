<?php 
	include_once("../Model/Endity_Teacher.php");
	include_once("../Model/Model_Teacher.php");
	Class Teacher_Controller{
		public $M_Teacher;
		public function __construct(){
			$this->M_Teacher = new Model_Teacher();
		}	
		function index(){
			include_once "../View/Index.php";
		}
		function create(){
			include_once "../View/Create.php";
		}
		function store(){
			if (isset($_POST['btnSubmit'])) {
				$maGv = $_POST['txtMaGv'];
				$hoTen = $_POST['txtHoTen'];
				$ngaySinh = $_POST['txtNgaySinh'];
				$diaChi = $_POST['txtDiaChi'];
				$soDt = $_POST['txtSoDt'];
				$khoa = $_POST['txtKhoa'];
				$check = $this->M_Teacher->getByMaGv($maGv);
				if ($check ==null) {
					$this->M_Teacher->insert($maGv, $hoTen, $ngaySinh, $diaChi, $soDt, $khoa);
				}
				else{
					echo '<script>
						alert("Trùng mã giảng viên!!!");
					</script>';
				}
				}
			}
		function edit(){
			include_once "../View/Update.php";
		}
		function update(){
			if (isset($_POST['btnSubmit'])) {
				$maGv = $_GET['maGv'];
				$hoTen = $_POST['txtHoTen'];
				$ngaySinh = $_POST['txtNgaySinh'];
				$diaChi = $_POST['txtDiaChi'];
				$soDt = $_POST['txtSoDt'];
				$khoa = $_POST['txtKhoa'];
				$this->M_Teacher->update($hoTen, $ngaySinh, $diaChi, $soDt, $khoa, $maGv);
			}
			else{
				echo "string";
			}
		}
		function delete(){
			$maGv = $_GET['maGv'];
			$this->M_Teacher->delete($maGv);
		}
		function search(){
			if (isset($_POST['btnSubmit'])){
				$keyWord = $_POST['txtKeyWord'];
				include_once '../Model/Model_Teacher.php';
				$M_Teacher = new Model_Teacher();
				$teacher_search = $M_Teacher->getByMaGv($keyWord);
				if($teacher_search!=null){
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