<?php
require_once "dbkoneksi.php";
$id = $_GET['idedit'];
$sql = "UPDATE pelanggan SET kode=?,nama=?,jk=?,tmp_lahir=?,
tgl_lahir=?,email=?,kartu_id=? WHERE id=?";
$statement = $dbh->prepare($sql); 
// $st->execute($ar_data);

header("location:form_pelanggan.php");
?>




