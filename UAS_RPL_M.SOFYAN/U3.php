<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <title>SMK Assalaam || Uas 3</title>
  </head>
  <body style = "background-color :rgb(220, 220, 220)">

   <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="login.php">Sfyn_Jc</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="U.PHP">Soal 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="U2.php">Soal 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="U3.php">Soal 3</a>
      </li>
    </ul>
  </div>
</nav>

  <!-- AWAL CONTENT -->
       <form method="POST">
           <fieldset>
           <center>
           <table>
               <br>
               <h2>----- FORM PENGULAGAN -----</h2>
               <br>
               <tr>
                   <td></td>
                   <td></td>
                   <td>1. Deret Bilangan Ganjil</td>
               </tr>

               <tr>
                   <td></td>
                   <td></td>
                   <td>2. Segitiga Sama Kaki Terbalik</td>
               </tr>

               <tr>
                   <td></td>
                   <td></td>
                   <td>3. Deret Bilangan Kelipatan 3</td>
               </tr>

               <tr>
                   <td><b>Pilih</b></td>
                   <td>:</td>
                   <td><input type="text" name="pilih"></td>
               </tr>
               <tr>
                   <td><b>Masukkan Angka</b></td>
                   <td>:</td>
                   <td><input type="number" name="angka"></td>
               </tr>
               <tr>
                   <td></td>
                   <td></td>
                   <td><input type="submit" name="save" value="SEND" class="btn btn-dark"></td>
               </tr>

           </table>
           </center>
           </fieldset>
       </form>
</body>
</html>


<?php

if (isset($_POST['save'])) {

    $angka = $_POST['angka'];
    $pilih = $_POST['pilih'];

    echo "<br>";
    switch ($pilih) {
        case 1:
            echo "<center>";
            echo "<i>Berikut Deret Bilangan Ganjil</i>";
            echo "<br>";
            echo "<br>";
            for ($i = 1; $i <= $angka; $i += 2) { //UNTUK PERULANGAN BILANGAN GANJIL
                echo "$i,";
            }
            echo "</center>";

            break;

        case 2:
            echo "<center>";
            echo "<i>Berikut Deret Bintang Terbalik</i>";
            echo "<br>";
            echo "<br>";
            for ($i = 1; $i <= $angka; $i++) { //UNTUK PERULANGAN BINTANG TERBALIK,INI UNTUK BARIS
                for ($a = $angka; $a >= $i; $a -= 1) { //INI UNTUK BINTANG
                    echo " *";
                }
                echo "<br>";
            }
            echo "</center>";
            break;

        case 3:
            echo "<center>";
            echo "<i>Berikut Deret Bilangan Kelipatan 3</i>";
            echo "<br>";
            echo "<br>";
            for ($b = 3; $b <= $angka; $b += 3) { //UNTUK PERULANGAN KELIPATAN 3
                echo "$b,";
            }
            echo "</center>";
            break;

        default:
    }

}

?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>