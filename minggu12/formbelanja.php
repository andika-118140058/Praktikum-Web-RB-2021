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
                        <form action="belanja.php" method="POST" id="belanja" name="belanja" enctype="multipart/form">
                            
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="">Skin Elite Rp 100.000 </label>
                                        <input class="input--style-4" type="number" id="elite" onchange="setValue()" name="elite"> <br>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="">Special Rp 125.000 </label>
                                            <input class="input--style-4" type="number" id="special" onchange="setValue()" name="special"> <br>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="">Epic Rp 150.000 </label>
                                        <input class="input--style-4" type="number" id="epic" onchange="setValue()" name="epic"> <br>
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
            var elite = document.getElementById("elite").value * 100000;
            var special = document.getElementById("special").value * 125000;
            var epic = document.getElementById("epic").value * 150000;
            console.log(elite + special + epic);
            var hasil = elite + special + epic;
            total.value = hasil;
        }
    </script>
</html>