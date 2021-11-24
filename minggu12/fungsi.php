<?php 
	//koneksi ke database 
	$koneksi = mysqli_connect("localhost", "root", "", "minggu12");

	function query($query){
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$rows = [];

		while( $row = mysqli_fetch_assoc($result) ){
			$rows[] = $row;
		}
	return $rows;
	}

	function tambah($data){
		global $koneksi;

		//ambil data dari tiap elemen dalam form
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
		$message = htmlspecialchars($data["message"]);

		// upload file
		$file = upload();
		if( !$file ){
			return false;
		}

		//query insert data
		$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$email', '$file', '$message')";
		mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);
	}

	function upload(){
		$namaFile = $_FILES['file']['name'];
		$ukuranFile = $_FILES['file']['size'];
		$error = $_FILES['file']['error'];
		$tmpName = $_FILES['file']['tmp_name'];

		//cek apakah tidak ada file diupload
		if( $error === 4 ){
			echo "<script>
					alert('pilih file dahulu');
				</script>";
			return false;
		}

		//cek apakah yg diupload file
		$ekstensifileValid = ['jpg', 'jpeg', 'png', 'pdf'];
		$ekstensifile = explode('.', $namaFile);
		$ekstensifile = strtolower(end($ekstensifile));

		if(!in_array($ekstensifile, $ekstensifileValid)){
			echo "<script>
					alert('Yang diupload harus file/pdf');
				</script>";
			return false;
		}

		//cek ukuran filenya kalau terlalu besar
		if($ukuranFile > 1000000){
			echo "<script>
					alert('Ukuran file terlalu besar');
				</script>";
		}

		//lolos pengecekan
		//generate nama file biar tidak sama
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensifile;

		move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

		return $namaFileBaru;
	}
