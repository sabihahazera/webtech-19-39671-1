<?php 

require_once '../model/model.php';

if (deleteProducts($_GET['id'])) {
    header('Location: ../showAllProducts.php');
}

 ?>