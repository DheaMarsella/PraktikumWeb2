<?php
require_once "../../Database/dbkoneksi.php";
$id = $_GET['iddel'];
$sql = "DELETE FROM Produk WHERE id = ?";
$statement = $dbh->prepare($sql); 
$statement->execute([$id]);

header("location:../../Pages/Produk/list_produk.php");