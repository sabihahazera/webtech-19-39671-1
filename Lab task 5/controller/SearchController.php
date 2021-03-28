<?php

require_once '../model/model.php';

if (isset($_POST['search'])) {
	
		//echo $_POST['Product_name'];

    try {
    	
    	$allSearchedProducts = SearchProducts($_POST['ProductName']);
    	require_once '../SearchAllProducts.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

