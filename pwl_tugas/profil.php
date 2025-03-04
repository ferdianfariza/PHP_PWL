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
               <a class="nav-link active" aria-current="true" href="profil.php">Profil</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="nilai.php">Nilai</a>
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

         <h5 class="card-title mb-3">Profil Mahasiswa</h5>
         <?php
         $nim = "A11.2023.15074";
         $nama = "Ferdian Nur Fariza";
         $alamat = "Jalan Nongkosawit Raya";
         $email = "ferdianfariza@gmail.com";
         $telepon = "085899877866";

         echo "<p><strong>Nama   </strong> : $nama <br></p>";
         echo "<p><strong>NIM    </strong> : $nim <br></p>";
         echo "<p><strong>Alamat </strong> : $alamat <br></p>";
         echo "<p><strong>Email  </strong> : $email <br></p>";
         echo "<p><strong>Telepon</strong> : $telepon <br></p>";
         ?>
      </div>
   </div>




</body>


</html>