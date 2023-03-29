<?php
require_once "../../Database/dbkoneksi.php";
$id = $_GET['iddel'];
$sql = "DELETE FROM Pelanggan WHERE id = ?";
$statement = $dbh->prepare($sql); 
$statement->execute([$id]);

header("location:../../Pages/Pelanggan/list_pelanggan.php");