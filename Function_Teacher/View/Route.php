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
		case 'create':
			$controller->create();
			break;
		case 'store':
			$controller->store();
			break;
		case 'create2':
			$controller->create2();
			break;
		case 'store2':
			$controller->store2();
			break;
		case 'dtb':
			$controller->dtb();
			break;
		case 'dtbhk':
			$controller->dtbhk();
			break;
		case 'edit':
			$controller->edit();
			break;
		case 'updatepassword':
			$controller->updatepassword();
			break;
		default:
			break;
	}
 ?>