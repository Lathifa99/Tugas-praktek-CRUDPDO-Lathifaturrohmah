<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM peminjaman WHERE Id_peminjaman= ?";
$row = $koneksi->prepare($sql);
$row->execute(array($id));
echo '<script>alert("Data Berhasil Dihapus");window.location="peminjaman.php"</script>';
