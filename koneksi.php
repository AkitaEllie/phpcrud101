<?php
$koneksi = new mysqli('localhost', 'root', '', '11rpl1_evangelo')
or die(mysqli_error($koneksi));
if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) values ('$idPasien', '$nmPasien', '$jk', '$alamat')");
    header('location: pasien.php');
}

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idPasien = '$idPasien'");
    header("location:pasien.php");
}
?>