<?php  
require_once '../model/model.php';


if (isset($_POST['updateProduct'])) {
	$data['Name'] = $_POST['Name'];
	$data['BuyingPrice'] = $_POST['BuyingPrice'];
	$data['SellingPrice'] = $_POST['SellingPrice'];
    $data['Display'] = $_POST['Display'];
	

  if (updateProducts($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../ShowAllProducts.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>