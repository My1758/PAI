<?php 
	require_once "../Controller/Controller.php";
	$controllerGet = isset($_GET['controller']) ? trim($_GET['controller']) : '';
	$controller = new Function_Controller();
	switch ($controllerGet) {
		case 'search':
			$controller->search();
			break;
		case 'logout':
			$controller->logout();
			break;
		case 'dtb':
			$controller->dtb();
			break;
		case 'dtbhk':
			$controller->dtbhk();
			break;
		case 'updatepassword':
			$controller->updatepassword();
			break;
		default:
			break;
	}
 ?>