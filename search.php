<?php
include 'koneksi.php';
/**
 * @var $connection PDO

*/

$cari = $_GET['q'];

$statement = $connection->query("select * from mahasiswa WHERE nama='$cari'");
//atur supaya hasilnya berupa array
$statement->setFetchMode(PDO::FETCH_ASSOC);
//JALAN KAN QUERY
$result = $statement->fetchAll();
//output json
header('Content-Type: application/json');
// echo json_encode($result);
if ($result) {
	echo json_encode($result);
}else{
	echo "Gada";
}