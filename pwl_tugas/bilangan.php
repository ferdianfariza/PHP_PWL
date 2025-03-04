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
               <a class="nav-link active" aria-current="true" href="bilangan.php">Konversi Bilangan</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="suhu.php">Konversi Suhu</a>
            </li>
         </ul>
      </div>
      <div class="card-body">

         <table class="table table-hover">
            <thead>
               <tr>
                  <th scope="col">Desimal</th>
                  <th scope="col">Biner</th>
                  <th scope="col">Oktal</th>
                  <th scope="col">Hexa</th>
               </tr>
            </thead>
            <tbody>
               <?php
               for ($i = 0; $i <= 10; $i++) {
                  echo "<tr>";
                  echo "<td>$i</td>";
                  echo "<td>" . decbin($i) . "</td>";
                  echo "<td>" . decoct($i) . "</td>";
                  echo "<td>" . dechex($i) . "</td>";
                  echo "<tr>";
               }
               ?>
            </tbody>
         </table>
         <h5 class="card-title">Konversi Bilangan</h5>
         <p class="card-title">Bilangan Desimal, Biner, Oktal, Hexa</p>
      </div>
   </div>




</body>


</html>