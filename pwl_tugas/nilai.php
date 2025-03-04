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

<body class="bg-light">

   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous">
   </script>
   <div class="card">
      <div class="card-header">
         <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
               <a class="nav-link " href="profil.php">Profil</a>
            </li>
            <li class="nav-item">
               <a class="nav-link active" aria-current="true" href="nilai.php">Nilai</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="bilangan.php">Konversi Bilangan</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="suhu.php">Konversi Suhu</a>
            </li>
         </ul>
      </div>
      <div class="card-body">
         <h5 class="card-title mb-3">Akademik Mahasiswa</h5>
         <?php
         $tugas = "50";
         $uts = "50";
         $uas = "87";
         $bilangan = 1;
         $ntugas = 0.3 * $tugas;
         $nuts = 0.35 * $uts;
         $nuas = 0.35 * $uas;
         $nakhir = ($ntugas + $nuts + $nuas);

         $huruf = "null";
         if ($nakhir >= 85) {
            $huruf = "A";
         } elseif ($nakhir >= 68.5) {
            $huruf = "B";
         } elseif ($nakhir >= 58.5) {
            $huruf = "C";
         } elseif ($nakhir >= 40) {
            $huruf = "D";
         } else {
            $huruf = "D";
         }

         echo "<p><strong> Nilai Tugas</strong>    : $tugas <br></p>";
         echo "<p><strong>Nilai UTS  </strong>  : $uts <br></p>";
         echo "<p><strong>Nilai UAS  </strong>  : $uts <br></p>";
         echo "<p><strong>Nilai Akhir</strong>    : $nakhir <br></p>";
         echo "<p><strong>Nilai Huruf</strong> : $huruf <br></p>";

         ?>
      </div>
   </div>




</body>


</html>