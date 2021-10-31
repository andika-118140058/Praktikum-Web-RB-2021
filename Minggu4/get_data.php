<?php
session_start();
include 'koneksi.php';
 
$id = $_POST['id'];
$query = "SELECT * FROM tbl_mahasiswa WHERE id=? ORDER BY id DESC";
$dewan1 = $db1->prepare($query);
$dewan1->bind_param('i', $id);
$dewan1->execute();
$res1 = $dewan1->get_result();
while ($row = $res1->fetch_assoc()) {
    $h['id'] = $row["id"];
    $h['nama_mahasiswa'] = $row["nama_mahasiswa"];
    $h['alamat'] = $row["alamat"];
    $h['jurusan'] = $row["jurusan"];
    $h['jenis_kelamin'] = $row["jenis_kelamin"];
    $h['tgl_masuk'] = $row["tgl_masuk"];
}
echo json_encode($h);
 
$db1->close();
?>