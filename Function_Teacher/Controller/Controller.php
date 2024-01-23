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
				alert("Log out successful");
				window.location="http://localhost/project/Login";
			</script>';
			exit();
		}
		function create(){
			$stt = $this->M_Function->getStt($_GET['maHp'], $_GET['maLop']);
			if ($stt == null) {
				include_once '../View/create.php';
			}
			else{
				echo '<script>
					alert("Bạn đã nhập điểm quá trình rồi!");
					window.location="Index.php";
				</script>';
			}
			
		}
		function create2(){
			$stt = $this->M_Function->getStt($_GET['maHp'], $_GET['maLop']);
			if ($stt == null) {
				echo '<script>
					alert("Bạn chưa nhập điểm quá trình");
					window.location="Index.php";
				</script>';
			}
			else if ($stt == 0) {
				include_once '../View/create_final.php';
			}
			else{
				echo '<script>
					alert("Bạn đã nhập điểm kết thúc rồi!");
					window.location="Index.php";
				</script>';
		}
	}
		function store2(){
			if (isset($_POST['btnSubmit'])) {
				session_start();
				$hocphan = $_POST['txtHp'];
				$stt = 1;
				for ($i=0; $i < sizeof($_SESSION['student']); $i++) { 
					$diemcc=$_POST['txtCC?id='.$i];
					$diemgk=$_POST['txtGK?id='.$i];
					$diemck=$_POST['txtCK?id='.$i];
					$maSv=$_POST['txtMaSv?id='.$i];
					$diemtongket =  round($diemcc*0.1+$diemgk*0.2+$diemck*0.7, 2);
					if ($diemtongket<4) {
						$diemchu = "F";
					}
					else if ($diemtongket>=4&&$diemtongket<5) {
						$diemchu = "D";
					}
					else if ($diemtongket>=5&&$diemtongket<5.5) {
						$diemchu = "D+";
					}
					else if ($diemtongket>=5.5&&$diemtongket<6.5) {
						$diemchu = "C";
					}
					else if ($diemtongket>=6.5&&$diemtongket<7) {
						$diemchu = "C+";
					}
					else if ($diemtongket>=7&$diemtongket<8) {
						$diemchu = "B";
					}
					else if ($diemtongket>=8&&$diemtongket<8.5) {
						$diemchu = "B+";
					}
					else if ($diemtongket>=8.5) {
						$diemchu = "A";
					}
					$this->M_Function->createFinal($diemck, $diemtongket, $diemchu, $stt, $hocphan, $maSv);
				}
				echo '<script>
					alert("Nhập điểm thành công");
					window.location="http://localhost/project/Function_Teacher/View/Route.php?controller=dtb&hocky='.$_GET['hocky'].'";
				</script>';
			}
		}
		function edit(){
			$stt = $this->M_Function->getStt($_GET['maHp'], $_GET['maLop']);
			if ($stt == 2) {	
				include_once '../View/edit.php';
			}
			else{
				echo '<script>
					alert("Bạn chưa có quyền sửa điểm!!");
					window.location="Index.php";
				</script>';
			}
		}
		function store(){
			session_start();
			if (isset($_POST['btnSubmit'])) {
				$hocphan = $_POST['txtHp'];
				$hocky = $_POST['txtHocKy'];
				$lop = $_POST['txtLop'];
				for ($i=0; $i < sizeof($_SESSION['student']); $i++) { 
					$diemcc=$_POST['txtCC?id='.$i];
					$diemgk=$_POST['txtGK?id='.$i];
					$maSv=$_POST['txtMaSv?id='.$i];
					$hk = $this->M_Function->getBangDiemTKByHK($maSv, $hocky);
					if ($hk == null ) {
						if ($diemcc < 5) {
							$note = "Cấm thi";
							$this->M_Function->createCT($maSv, $hocphan, $hocky);
							$this->M_Function->createHK($maSv, $hocky);
							$this->M_Function->create1($maSv, $hocphan, $lop, $diemcc, $diemgk, $hocky, $note);
						}
						else{
							$note = "";
							$this->M_Function->createHK($maSv, $hocky);
							$this->M_Function->create1($maSv, $hocphan, $lop, $diemcc, $diemgk, $hocky, $note);
						}
					}
					else{
						if ($diemcc < 5) {
							$note = "Cấm thi";
							$this->M_Function->createCT($maSv, $hocphan, $hocky);
							$this->M_Function->create1($maSv, $hocphan, $lop, $diemcc, $diemgk, $hocky, $note);
						}
						else{
							$note = "";
							$this->M_Function->create1($maSv, $hocphan, $lop, $diemcc, $diemgk, $hocky, $note);
						}
					}
				}
				unset($_SESSION['student']);
				echo '<script>
					alert("Nhập điểm thành công");
					window.location="Index.php";
				</script>';
			}
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
						alert("Đổi mật khẩu thành công, vui lòng đăng nhập lại");
						window.location="http://localhost/project/Function_Teacher/View/Route.php?controller=logout";
					</script>';
				}
				else{
					echo '<script>
						alert("Hai mật khẩu không khớp!");
					</script>';
				}
			}
			else{
				echo '<script>
					alert("Sai mật khẩu!");
				</script>';
			}
		}
		function dtb(){
			session_start();
			for ($i=0; $i < sizeof($_SESSION['student']); $i++) { 
				$maSv = $_SESSION['student'][$i][0];
				$tinchi = $this->M_Function->getSTC($maSv);
				$tk = $this->M_Function->getAllBangDiem($maSv);
				$tongdiem = 0;
				for ($i1=0; $i1 < sizeof($tinchi) ; $i1++) { 
					$tongdiem += $tk[$i1]*$tinchi[$i1];
				}
				$diemtichluy = round($tongdiem/array_sum($tinchi), 2);
				if ($diemtichluy >= 4 && $diemtichluy <7) {
					$diemhebon = 2;
					$xeploai = "Trung bình";
				}
				else if ($diemtichluy >=7 && $diemtichluy <8.5) {
					$diemhebon = 2.5;
					$xeploai = "Khá";
				}
				else if($diemtichluy >=8.5){
					$diemhebon = 3.2;
					$xeploai = "Giỏi";
				}
				$this->M_Function->updateDTB($diemtichluy, $diemhebon, $xeploai, $maSv);
			}
			echo '<script>
					window.location="http://localhost/project/Function_Teacher/View/Route.php?controller=dtbhk&hocky='.$_GET['hocky'].'";
				</script>';
		}
		function dtbhk(){
			session_start();
			for ($i=0; $i < sizeof($_SESSION['student']); $i++) { 
				$maSv = $_SESSION['student'][$i][0];
				$tinchi = $this->M_Function->getSTC1($maSv, $_GET['hocky']);
				$tk = $this->M_Function->getBangDiemByHK($maSv, $_GET['hocky']);
				$tongdiem = 0;
				for ($i1=0; $i1 < sizeof($tk) ; $i1++) { 
					$tongdiem += $tk[$i1]*$tinchi[$i1];
				}
				$diemtb = round($tongdiem/array_sum($tinchi), 2);
				$this->M_Function->updateHK($diemtb, $maSv, $_GET['hocky']);
			}
			echo '<script>
					window.location="Index.php";
				</script>';
			unset($_SESSION['student']);
		}
	}

 ?>