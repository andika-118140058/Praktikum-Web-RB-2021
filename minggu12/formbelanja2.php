<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Form By Genja Rizky Novianto</title>
    
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
        <link href="form.css" rel="stylesheet" media="all">
    </head>
    <body id="body">
        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                    <div class="card-body">
                        <h2 class="title">Form Belanja</h2>
                        <form action="belanja2.php" method="POST" id="belanja" name="belanja" enctype="multipart/form">
                            
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="">DM Kecil 2180 DM = Rp 250.000 </label>
                                        <input class="input--style-4" type="number" id="kecil" onchange="setValue()" name="kecil"> <br>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="">DM Sedang 5600 DM = Rp 600.000</label>
                                            <input class="input--style-4" type="number" id="sedang" onchange="setValue()" name="sedang"> <br>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="">DM Besar 11200 DM = Rp 1.150.000</label>
                                        <input class="input--style-4" type="number" id="besar" onchange="setValue()" name="besar"> <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label for="">Total Harga : </label>
                                    <input class="input--style-4" type="text" id="total" name="total" readonly> <br>
                                </div>
                            </div>
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        function setValue(){
            var total = document.getElementById("total");
            var kecil = document.getElementById("kecil").value * 250000;
            var sedang = document.getElementById("sedang").value * 600000;
            var besar = document.getElementById("besar").value * 1150000;
            console.log(kecil + sedang + besar);
            var hasil = kecil + sedang + besar;
            total.value = hasil;
        }
    </script>
</html>