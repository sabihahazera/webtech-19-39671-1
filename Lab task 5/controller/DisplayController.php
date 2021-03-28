<?php 

require_once ('model/model.php');

function fetchAllProducts($products){
	return showAllProducts($products);

}
function fetchProducts($id){
	return showProducts($id);

}
