<?php  

include_once '../model/Conexao.php';
include_once '../model/Manager.php';

$manager = new Manager();

$id = $_POST['id'];

if(isset($id) && !empty($id)) {
	$manager->deleteClient("registros", $id);

	header("Location: ../index.php?client_deleted");
}

?>