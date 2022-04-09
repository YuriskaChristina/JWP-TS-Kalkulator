<?php  $this->load->view('templates/header')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpangkatan</title>
</head>
<body>
    <h2>Perpangkatan</h2>
    <form action="Perpangkatan/pangkat" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            Masukkan Nilai 1 : <input type="number" name="a"  id="a" step="any" required autofocus>
        </div>
        <div class="mb3">
            Masukkan Nilai 2 : <input type="number" name="b" id="b" step="any" required autofocus>
        </div>
        <br>
        <div class="row">
            <div class="sm-4"></div>
            <div class="sm-4">   
                <input type="submit" value="Submit" name="submit">
            </div>
        </div>
    </form>
</body>
</html>
<?php  $this->load->view('templates/header')?>
