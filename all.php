<?php
include 'koneksi.php';
/**
 * @var $connection PDO
*/
$statement = $connection->query("select * from mahasiswa");
//atur supaya hasilnya berupa array
$statement->setFetchMode(PDO::FETCH_ASSOC);
//JALAN KAN QUERY
$result = $statement->fetchAll();
//output json
header('Content-Type: application/json');
echo json_encode($result);
