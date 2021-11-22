<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: listdata.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswaukm WHERE id=$id";
$query = mysqli_query($db, $sql);
$mahasiswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>U K M | K S R</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="update.css">
</head>

<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="formdaftar.php">Daftar</a></li>
        <li><a href="listdata.php">Pendaftar</a></li>
        <li><a href="about.php">About</a></li>
        <li style="float:right"><a>KSR UNIT ITERA</a></li>
    </ul>

    <header>
        <h1>Edit Formulir Pendaftaran Ukm KSR</h1>
    </header>

    <center>
    <form action="prosesupdate.php" method="POST">  

            <input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $mahasiswa['nama'] ?>" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="Email" value="<?php echo $mahasiswa['email'] ?>" />
        <p>
            <label for="prodi">Prodi: </label>
            <input type="text" name="prodi" placeholder="Program Studi" value="<?php echo $mahasiswa['prodi'] ?>" />
        </p>
        <p>
            <label for="jeniskelamin">Jenis Kelamin: </label>
            <?php $jeniskelamin = $mahasiswa['jeniskelamin']; ?>
            <label><input type="radio" name="jeniskelamin" value="Laki-laki" <?php echo ($jeniskelamin == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jeniskelamin" value="Perempuan" <?php echo ($jeniskelamin == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="provinsi">Provinsi: </label>
            <input type="text" name="provinsi" placeholder="Asal Provinsi" value="<?php echo $mahasiswa['provinsi'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" class="button"/>
        </p>

    </form>
    </center>

    </body>
</html>