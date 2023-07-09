<?php
require_once '../P5_bunga_TI06/dbkoneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM kartu WHERE id= ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
header('location:index.php');

?>