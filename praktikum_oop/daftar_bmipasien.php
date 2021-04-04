<?php
    require 'class_bmipasien.php';

    $data_bmi = [
        ['nama' => 'Ckaliazha', 'umur' => 18, 'jk' => 'perempuan', 'berat' => 43, 'tinggi' => 155],
        ['nama' => 'Chika', 'umur' => 19, 'jk' => 'Perempuan', 'berat' => 45, 'tinggi' => 153],
        ['nama' => 'Aulia', 'umur' => 18, 'jk' => 'perempuan', 'berat' => 65, 'tinggi' => 158],
        ['nama' => 'Zahwa', 'umur' => 20, 'jk' => 'perempuan', 'berat' => 85, 'tinggi' => 157],
    ];
    $nomor=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data BMI Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<style>
body {
    padding: 2rem;
}
</style>
<body>
<div class="container-fluid">
    <div class="row mt-3">
      <div class="col-12">
        <div class="">
          <div class="card">
            <div class="card-header bg-info text-white">
              <h3 class="card-title">Data Indeks Massa Tubuh (BMI)</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                      <thead>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Gender</th>
                        <th>Umur</th>
                        <th>Berat (Kg)</th>
                        <th>Tinggi (cm)</th>
                        <th>BMI</th>
                        <th>Hasil</th>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($data_bmi as $i => $row) {
                          $bmi1 = new BmiPasien($row['nama'], $row['umur'], $row['jk'], $row['berat'], $row['tinggi']);
                          $hasil = $bmi1->hasilBMI();
                          $status = $bmi1->statusBMI();
                          $rowColour = $bmi1->getRowColour();
                        ?>
                        <tr class="<?= $rowColour ?>" style="opacity:0.9;">
                          <td><?= $i+1 ?></td>
                          <td><?= $bmi1->nama ?></td>
                          <td><?= (strtolower($bmi1->jk) == 'laki') ? 'Laki-Laki' : 'Perempuan' ?></td>
                          <td><?= $bmi1->umur ?></td>
                          <td><?= $bmi1->berat ?></td>
                          <td><?= $bmi1->tinggi ?></td>
                          <td><?= $hasil ?></td>
                          <td><?= $status ?></td>
                        </tr>
                        <?php
                          }      
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<!-- <h3 class="card-title">Data Indeks Massa Tubuh (BMI)</h3>
<div class="container">
    <table class="table table-hover table-responsive">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Gender</th>
        <th scope="col">Umur</th>
        <th scope="col">Berat (Kg)</th>
        <th scope="col">Tinggi (cm)</th>
        <th scope="col">BMI</th>
        <th scope="col">Hasil</th>
        </tr>
    </thead>
    <tbody>

        

    </tbody>
    </table>
</div>
</body>
</html>
