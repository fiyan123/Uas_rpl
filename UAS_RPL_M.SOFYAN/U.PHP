<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <title>SMK Assalaam || Uas 1</title>
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
      <li class="nav-item">
        <a class="nav-link" href="U.PHP" class="btn btn-primary">Soal 1</a>
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


    <!-- AWAL CONTENT ATAU ISI -->
    <form method="POST">
        <fieldset>
        <center>
        <table>
            <br>
            <br>
            <h2><i>----- Syarat Masuk Miko Mall -----</i></h2>
            <tr>
                <br>
                <td>Nama Anda</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
                <br>
            </tr>
            <tr>
                <td>Status Vaksin</td>
                <td>:</td>
                <td>
                    <select name="status">
                        <option>"------ Status Vaksin ------"</option>
                        <option value="Sudah Vaksin">Sudah vaksin</option>
                        <option value="Belum Vaksin">Belum vaksin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name ="save" value="SEND"  class="btn btn-dark"></td>
            </tr>
        </table>
        </fieldset>
        </center>
    </form>

<?php

if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $status = $_POST['status'];

    echo "<hr>";
    echo "<center>";
    echo "<table>";
    echo "<br>";
    echo "Nama Anda     : $nama";
    echo "<br>";
    echo "Status Vaksin : $status";

    if ($status == "Sudah Vaksin") {
        echo "<br>";
        echo "<br>";
        echo "<b><i><u>Di Izinkan Masuk</u></i></b><br>";

    } else if ($status == "Belum Vaksin") {
        echo "<br>";
        echo "<br>";
        echo '<a href = "https://www.pedulilindungi.id/"><i>Silahkan Daftar</i><br></a>';
        echo "<br>";
    }
    echo "</center>";

    echo "</table>";

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
