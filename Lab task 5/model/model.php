<?php 

require_once 'db_connect.php';


function showAllProducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `products` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showProducts($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `products` where Id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchProducts($products){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `products` WHERE Name LIKE '%$products%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addProducts($data){
	$conn = db_conn();
    $selectQuery = "INSERT into products (Name, BuyingPrice, SellingPrice, Display)
VALUES (:Name, :BuyingPrice, :SellingPrice, :Display)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':Name' => $data['Name'],
        	':BuyingPrice' => $data['BuyingPrice'],
        	':SellingPrice' => $data['SellingPrice'],
        	':Display' => $data['Display'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateProducts($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE products set Name = ?, BuyingPrice = ?, SellingPrice = ? where Id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['Name'], $data['BuyingPrice'], $data['SellingPrice'], $data['Display'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProducts($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `products` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}