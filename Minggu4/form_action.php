<?php
session_start();
include 'koneksi.php';

$nim_mahasiswa = stripslashes(strip_tags(htmlspecialchars($_POST['nim_mahasiswa'] ,ENT_QUOTES)));
$nama_mahasiswa = stripslashes(strip_tags(htmlspecialchars($_POST['nama_mahasiswa'] ,ENT_QUOTES)));
$prodi_mahasiswa = stripslashes(strip_tags(htmlspecialchars($_POST['prodi_mahasiswa'] ,ENT_QUOTES)));
$angkatan = stripslashes(strip_tags(htmlspecialchars($_POST['angkatan'] ,ENT_QUOTES)));

if ($id == "") {
    $query = "INSERT into tbl_mahasiswa (nim_mahasiswa, nama_mahasiswa, prodi, angkatan) VALUES (?, ?, ?, ?, ?)";
    $dewan1 = $db1->prepare($query);
    $dewan1->bind_param("sssss", $nim_mahasiswa, $nama_mahasiswa, $prodi_mahasiswa, $angkatan);
    $dewan1->execute();
} else {
    $query = "UPDATE tbl_mahasiswa SET nim_mahasiswa=?, nama_mahasiswa=?, prodi=?, angkatan=?, WHERE id=?";
    $dewan1 = $db1->prepare($query);
    $dewan1->bind_param("sssss", $nim_mahasiswa, $nama_mahasiswa, $prodi_mahasiswa, $angkatan);
    $dewan1->execute();
}

echo json_encode(['success' => 'Sukses']);

$db1->close();
?>