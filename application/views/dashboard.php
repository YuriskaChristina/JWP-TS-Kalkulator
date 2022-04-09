<?php  $this->load->view('templates/header')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body style="background-image:url('https://cdn.wallpapersafari.com/48/28/Z7sNdR.jpg');">
    <h1 style="text-align:center; color:white;">Kalkulator</h1>
    <div class="container mt-3">
        <div class="row" style="margin-right:350px; margin-left:350px;">
            <a type="button" class="btn btn-primary" href="Penjumlahan"><i class="icon-plus"></i>&nbsp Penjumlahan</a>
            <hr><a type="button" class="btn btn-warning" href="Pengurangan"><i class="icon-minus"></i>&nbspPengurangan</a>
            <hr><a type="button" class="btn btn-success" href="Perkalian"><i class="icon-remove"></i>&nbspPerkalian</a>
            <hr><a type="button" class="btn btn-danger " href="Pembagian">&nbspPembagian</a>
            <hr><a type="button" class="btn btn-light" href="Perpangkatan"><i class="icon"></i>&nbspPerpangkatan</a>
            <hr><a type="button" class="btn btn-dark" href="Modulo"><i class="icon-percent"></i>&nbspModulo</a>
        </div>
    </div> 
</body>
</html>
<?php  $this->load->view('templates/footer')?>