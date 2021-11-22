<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $prodi = $_POST['prodi'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $provinsi = $_POST['provinsi'];

    $sql = "UPDATE mahasiswaukm SET nama='$nama', email='$email', prodi='$prodi', jeniskelamin='$jeniskelamin', provinsi='$provinsi' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: listdata.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>