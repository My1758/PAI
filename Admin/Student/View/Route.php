<?php 
	require_once "../Controller/Controller.php";
	$controllerGet = isset($_GET['controller']) ? trim($_GET['controller']) : '';
	$controller = new Student_Controller();
	switch ($controllerGet) {
		case 'create':
			$controller->create();	
			break;
		case 'store':
			$controller->store();
			break;
		case 'edit':
			$controller->edit();
			break;
		case 'update':
			$controller->update();
			break;
		case 'delete':
			$controller->delete();
			break;
		case 'search':
			$controller->search();
			break;
		default:
			break;
	}
 ?>