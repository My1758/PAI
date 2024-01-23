<?php 
	include_once("../Model/Endity_Student.php");
	include_once("../Model/Model_Student.php");
	Class Student_Controller{
		public $M_Student;
		public function __construct(){
			$this->M_Student = new Model_Student();
		}	
		function index(){
			include_once "../View/Index.php";
		}
		function create(){
			include_once "../View/Create.php";
		}
		function store(){
			if (isset($_POST['btnSubmit'])) {
				$maSv = $_POST['txtMaSv'];
				$hoTen = $_POST['txtHoTen'];
				$ngaySinh = $_POST['txtNgaySinh'];
				$diaChi = $_POST['txtDiaChi'];
				$lop = $_POST['txtLop'];	
				$khoa = $_POST['txtKhoa'];
				$check = $this->M_Student->getByMaSv($maSv);
				if ($check== null) {
					$this->M_Student->insert($maSv, $hoTen, $ngaySinh, $diaChi, $lop, $khoa);
				}
				else{
					echo '<script>
						alert("Trùng mã sinh viên");
					</script>';
				}
			}
		}
		function edit(){
			include_once "../View/Update.php";
		}
		function update(){
			if (isset($_POST['btnSubmit'])) {
				$maSv = $_GET['maSv'];
				$hoTen = $_POST['txtHoTen'];
				$ngaySinh = $_POST['txtNgaySinh'];
				$diaChi = $_POST['txtDiaChi'];
				$khoa = $_POST['txtKhoa'];
				$this->M_Student->update($hoTen, $ngaySinh, $diaChi, $khoa, $maSv);
			}
			else{
				echo "string";
			}
		}
		function delete(){
			$maSv = $_GET['maSv'];
			$this->M_Student->delete($maSv);
		}
		function search(){
			if (isset($_POST['btnSubmit'])){
				$keyWord = $_POST['txtKeyWord'];
				include_once '../Model/Model_Student.php';
				$M_Student = new Model_Student();
				$student_search = $M_Student->getByMaSv($keyWord);
				if($student_search!=null){
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