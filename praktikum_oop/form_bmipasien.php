<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form BMI Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0daa54a808.js" crossorigin="anonymous"></script>
</head>
<style>
    .inputan {
        margin: 10px;
        text-align:center;
    }
    .jumb {
        border-radius:4px;
        box-shadow: 0 0 1px rgba(0, 0, 0, 1);
        background-color:white;
        margin: 4em auto auto auto;
    }
    .judul {
        margin-bottom:50px;
        margin-top:-40px;
    }
    .geser {
        margin-right:25px;
    }
    .btn {
        margin-top:20px;
        margin-bottom:-30px;
    }
</style>
<body>
<form class="form-inline inputan" method="post" action="output.php" >
<div class="jumbotron jumbotron-fluid jumb">
    <div class="container">
        <h4 class="judul">Form Indeks Massa Tubuh (BMI)</h3>
        <div class="form-group mx-sm-3 mb-2">
            <label style="padding-right: 140px;">Nama</label>
            <div class="input-group input-group-default mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-address-card"></i></span>
                </div><input type="text" class="form-control" name="nama" >
            </div>
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label style="padding-right: 143px;">Umur</label>
            <div class="input-group input-group-default mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-birthday-cake"></i></i></span>
                </div><input type="text" class="form-control" name="umur">
            </div>
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label style="padding-right: 97px;">Berat Badan</label>
            <div class="input-group input-group-default mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-weight"></i></span>
                </div><input type="text" class="form-control" name="berat">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Kg</span>
                </div>
            </div>
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label style="padding-right: 90px;">Tinggi Badan</label>
            <div class="input-group input-group-default mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-text-height"></i></i></span>
                </div><input type="text" class="form-control" name="tinggi">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">cm</span>
                </div>
            </div>
        </div>
        <div class="form-group mx-sm-3 mb-2">
        <label style="padding-right: 98px;">Jenis Kelamin</label>
            <input class="form-check-input" type="radio" name="jk" value="Laki-laki">
            <label class="form-check-label geser">Laki-Laki</label>
            <input class="form-check-input" type="radio" name="jk" value="Perempuan">
            <label class="form-check-label">Perempuan</label>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-dark">Kirim</button>
        </div>
    </div>
</div>
</form>
</body>
</html>
