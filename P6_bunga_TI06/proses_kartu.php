<?php
//memanggil koneksi
require_once '../P5_bunga_TI06/dbkoneksi.php';
$Kode = $_POST['kode'];
$Nama = $_POST['nama'];
$Diskon = $_POST['diskon'];
$Iuran = $_POST['iuran'];
$Proses = $_POST['proses'];


// array data
$ar_data[] = $Kode; // ? 1
$ar_data[] = $Nama; // ? 2
$ar_data[] = $Diskon; // 3
$ar_data[] = $Iuran; // ? 7

if ($Proses == "Simpan") {
    //data baru
    $sql = "INSERT INTO kartu (kode,nama,diskon,iuran) 
    VALUES (?,?,?,?)";
} else if ($Proses == "Update") {
    $ar_data[] = $_POST['id']; // ? 8
    $sql = "UPDATE kartu SET kode=?,nama=?,diskon=?,iuran=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $is_success = $st->execute($ar_data); 
    if($is_success){
        header('location:index.php');
    }
}

echo 'Proses Gagal';
// header('location:index.php');
?>





?>