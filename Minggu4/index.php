<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


	<div class="container">
		<h2 align="center" style="margin: 30px;">C R U D</h2>

        <form method="post" class="form-data" id="form-data">  
        	<div class="row">
        		<div class="col-sm-3">
        			<div class="form-group">
						<label>Nim Mahasiswa</label>
						<input type="text" name="nim_mahasiswa" id="nim_mahasiswa" class="form-control" required="true">
                        <p class="text-danger" id="err_nim_mahasiswa"></p>
					</div>
        		</div>
	            <div class="col-sm-3">
	            	<div class="form-group">
						<label>Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" required="true">
                        <p class="text-danger" id="err_nama_mahasiswa"></p>
					</div>
	            </div>
	            <div class="col-sm-3">
	            	<div class="form-group">
						<label>Prodi</label>
						<input type="text" name="prodi" id="prodi" class="form-control" required="true">
                        <p class="text-danger" id="err_prodi"></p>
					</div>
	            </div>
	            <div class="col-sm-3">
	            	<div class="form-group">
						<label>Angkatan</label>
						<input type="text" name="angkatan" id="angkatan" class="form-control" required="true">
                        <p class="text-danger" id="err_angkatan"></p>
					</div>
	            </div>
			</div>
			
			<div class="form-group">
				<button type="button" name="simpan" id="simpan" class="btn btn-primary">
					<i class="fa fa-save"></i> Simpan
				</button>
			</div>
    
        <input type="hidden" name="id" id="id">
        </form>
        <hr>

		<div class="data"></div>
		
    </div>

    

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
            $.ajaxSetup({
               headers : {
                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
               }
            });

	    $('.data').load("data.php");
        $("#simpan").click(function(){
        var data = $('.form-data').serialize();
        var nim_mahasiswa = document.getElementById("nim_mahasiswa").value;
        var nama_mahasiswa = document.getElementById("nama_mahasiswa").value;
        var prodi = document.getElementById("prodi").value;
        var angkatan = document.getElementById("angkatan").value;
      
        $.ajax({
	            type: 'POST',
	            url: "form_action.php",
	            data: data,
	            success: function() {
	                $('.data').load("data.php");
	                document.getElementById("id").value = "";
	                document.getElementById("form-data").reset();
	            }, error: function(response){
		        console.log(response.responseText);
		    }
	        });
        }
        
    });
});

</script>
</body>
</html>