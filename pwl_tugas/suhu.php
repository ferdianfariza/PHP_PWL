<?php
function konversiSuhu($nilai, $satuan)
{
   if (!is_numeric($nilai)) {
      return "Masukkan angka yang valid";
   }

   $nilai = floatval($nilai);
   $hasil = [
      'Celcius' => 0,
      'Fahrenheit' => 0,
      'Kelvin' => 0,
      'Reamur' => 0
   ];

   switch ($satuan) {
      case 'Celcius':
         $hasil['Celcius'] = $nilai;
         $hasil['Fahrenheit'] = ($nilai * 9 / 5) + 32;
         $hasil['Kelvin'] = $nilai + 273;
         $hasil['Reamur'] = $nilai * 4 / 5;
         break;
      case 'Fahrenheit':
         $hasil['Celcius'] = ($nilai - 32) * 5 / 9;
         $hasil['Fahrenheit'] = $nilai;
         $hasil['Kelvin'] = ($nilai - 32) * 5 / 9 + 273;
         $hasil['Reamur'] = ($nilai - 32) * 4 / 9;
         break;
      case 'Kelvin':
         $hasil['Celcius'] = $nilai - 273;
         $hasil['Fahrenheit'] = ($nilai - 273) * 9 / 5 + 32;
         $hasil['Kelvin'] = $nilai;
         $hasil['Reamur'] = ($nilai - 273) * 4 / 5;
         break;
      case 'Reamur':
         $hasil['Celcius'] = $nilai * 5 / 4;
         $hasil['Fahrenheit'] = ($nilai * 9 / 4) + 32;
         $hasil['Kelvin'] = ($nilai * 5 / 4) + 273;
         $hasil['Reamur'] = $nilai;
         break;
   }
   return $hasil;
}

$nilai = $_POST['nilai'] ?? '';
$satuan = $_POST['satuan'] ?? '';
$hasilKonversi = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $hasilKonversi = konversiSuhu($nilai, $satuan);
}
?>

<!DOCTYPE html>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta charset="UTF-8" />
   <title>Ferdian</title>
   <link rel="stylesheet" href="style.css" />
   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
   <style>
      @media (min-width: 1024px) {
         html {
            padding: 100px;
         }
      }

      @media (max-width: 1023px) {
         html {
            padding: 50px;
         }
      }
   </style>
</head>

<body>

   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous">
   </script>
   <div class="card">
      <div class="card-header">
         <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
               <a class="nav-link" href="profil.php">Profil</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="nilai.php">Nilai</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="bilangan.php">Konversi Bilangan</a>
            </li>
            <li class="nav-item">
               <a class="nav-link active" aria-current="true" href="suhu.php">Konversi Suhu</a>
            </li>
         </ul>
      </div>
      <div class="card-body">
         <h5 class="card-title mb-3">Konversi Suhu</h5>
         <p>Pilih satuan dan masukan nilai:</p>
         <form method="POST">
            <div class="d-flex align-items-center gap-2 mb-3">
               <div class="btn-group" role="group">
                  <?php
                  $satuanList = ['Celcius', 'Fahrenheit', 'Kelvin', 'Reamur'];
                  foreach ($satuanList as $index => $unit) {
                     $checked = ($unit == $satuan) ? 'checked' : '';
                     echo "<input type='radio' class='btn-check' name='satuan' id='btnradio$index' value='$unit' $checked required>";
                     echo "<label class='btn btn-outline-primary' for='btnradio$index'>$unit</label>";
                  }
                  ?>
               </div>
               <div class="input-group">
                  <div class="input-group-text">Nilai</div>
                  <input type="text" class="form-control" name="nilai" placeholder="Masukkan Nilai" value="<?= htmlspecialchars($nilai) ?>" required>
               </div>
               <button type="submit" class="btn btn-primary">Konversikan</button>
            </div>
         </form>
         <?php if ($hasilKonversi) : ?>
            <h5 class="card-title mt-4">Hasil Konversi</h5>
            <table class="table">
               <thead>
                  <tr>
                     <th>Celcius</th>
                     <th>Fahrenheit</th>
                     <th>Kelvin</th>
                     <th>Reamur</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td><?= number_format($hasilKonversi['Celcius']) ?> °C</td>
                     <td><?= number_format($hasilKonversi['Fahrenheit']) ?> °F</td>
                     <td><?= number_format($hasilKonversi['Kelvin']) ?> °K</td>
                     <td><?= number_format($hasilKonversi['Reamur']) ?> °R</td>
                  </tr>
               </tbody>
            </table>
         <?php endif; ?>
      </div>

   </div>
   </div>




</body>


</html>