<?php 
	require_once "../Controller/Controller.php";
	$controllerGet = isset($_GET['controller']) ? trim($_GET['controller']) : '';
	$controller = new Account_Controller();
	switch ($controllerGet) {
		case 'search':
			$controller->search();
			break;
		case 'search1':
			$controller->search1();
			break;
		default:
			break;
	}
 ?>