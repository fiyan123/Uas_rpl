<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

     <title>SMK Assalaam || Uas 2</title>
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
        <center>
            <table>
            <fieldset>
                <br>
                <h4>----- Penggajihan Karyawan -----</h4>
                <hr>
                <br>
                <h2>PT . SELALU MAKMUR JAYA ABADI</h2>
                <hr>
            <tr>
                <td>Nama Bendahara</td>
                <td>:</td>
                <td><input type="text" name="bendahara"></td>
            </tr>

            <tr>
                <td>Nama Pekerja</td>
                <td>:</td>
                <td><input type="text" name="pekerja"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki">Laki-laki
                    <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr>

            <tr>
                <td>Tanggal Gaji</td>
                <td>:</td>
                <td><input type="date" name="tanggal" id=""></td>
            </tr>

            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>
                    <select name="jabatan">
                        <option>--- Pilihan Jabatan ---</option>
                        <option value="Direktur">Direktur</option>
                        <option value="Manager">Manager</option>
                        <option value="Sekretaris">Sekretaris</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="OB">OB</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td>
                    <select name="pendidikan">
                        <option>--- Pilihan Pendiidkan ---</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S1">S1</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Status Pegawai</td>
                <td>:</td>
                <td>
                    <input type="radio" name="status" value="Tetap"><i>Tetap</i>
                    <input type="radio" name="status" value="Kontrak"><i>Kontrak</i>
                </td>
            </tr>

            <tr>
                <td>Lembur</td>
                <td>:</td>
                <td><input type="text" name="lembur">Hari / Rp20.000</td>
            </tr>

            <tr>
                <td>Potongan BPJS</td>
                <td>:</td>
                <td><input type="text" name="bpjs"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="save" value="SEND" class="btn btn-dark"></td>
            </tr>
            </table>
        </center>
    </form>
    </fieldset>



<?php

if (isset($_POST['save'])) {

    // VARIABEL INPUTAN
    $bendahara = $_POST['bendahara'];
    $pekerja = $_POST['pekerja'];
    $jk = $_POST['jk'];
    $tanggal = $_POST['tanggal'];
    $pendidikan = $_POST['pendidikan'];
    $jabatan = $_POST['jabatan'];
    $lembur = $_POST['lembur'];
    $gaji;
    $tunjangan;
    $total_gaji;
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];

    // TUNJANGAN  GAJI JABATAN
    if ($jabatan == "Direktur") {
        $gaji = 10000000;
    } elseif ($jabatan == "Manager") {
        $gaji = 7500000;
    } elseif ($jabatan == "Sekretaris") {
        $gaji = 5000000;
    } elseif ($jabatan == "Karyawan") {
        $gaji = 3000000;
    } elseif ($jabatan == "OB") {
        $gaji = 1500000;
    } else {
        echo "Tidak ada";
    }

    // TUNJANGAN PENDIDIKAN
    if ($pendidikan == "SD") {
        $tunjangan = 200000;
    } elseif ($pendidikan == "SMP") {
        $tunjangan = 500000;
    } elseif ($pendidikan == "SMA") {
        $tunjangan = 1000000;
    } elseif ($pendidikan == "S1") {
        $tunjangan = 1500000;
    } elseif ($pendidikan == "S2") {
        $tunjangan = 2000000;
    } else {
        echo "Tidak Dapat";
    }

    echo "<br>";
    echo "<center>";
    echo "<h3>Struktur Gaji Karyawan</h3>";
    echo "</center>";
    echo "<hr>";
    echo "<br>";
    echo "<p align=right><b> Tanggal                                                                                 : $tanggal</b></p>";
    echo "<br>";

    echo "<i><b>Gaji Pokok</b></i>";
    echo "<br>";
    echo "<br>";

    echo "Nama Karyawan   &nbsp; &nbsp;    &nbsp; &nbsp;                                                                  : $pekerja";
    echo "<br>";
    echo "Jenis Kelamin   &nbsp;   &nbsp;    &nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;                                               : $jk ";
    echo "<br>";
    echo "Pendidikan Terakhir &nbsp;                                                                                   : $pendidikan";
    echo "<br>";
    echo "Jabatan    &nbsp;&nbsp; &nbsp; &nbsp;   &nbsp;    &nbsp;   &nbsp;   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : $jabatan";
    echo "<br>";
    echo "Gaji     &nbsp;   &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;   : Rp.$gaji";

    echo "<br>";
    echo "<br>";

    echo "<i><b>Tunjangan</b></i>";
    echo "<br>";
    echo "<br>";

    echo "Tunjangan Pendidikan     &nbsp;                                                                                          : Rp.$tunjangan";
    echo "<br>";

    // PROSES LEMBUR
    $vakasi = $lembur * 20000;
    echo "Vakasi Lembur  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;                                                     : Rp.$vakasi";
    echo "<br>";

    // PEMILIHAN BONUS PEGAWAI
    if ($status == "Tetap") {
        $bonus = 500000;
    } else {
        $bonus = 0;
    }

    echo "Bonus Status Kerja   &nbsp; &nbsp;&nbsp; &nbsp;                                                                            : Rp.$bonus";
    echo "<br>";
    echo "<br>";

    echo "<i><b>Potongan</b></i>";
    echo "<br>";
    echo "<br>";
    echo "Potongan BPJS    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;                                                     : Rp.$bpjs";

    echo "<br>";
    echo "<br>";

    // PROSES AKHIR TOTAL GAJI
    $total_gaji = ($gaji + $tunjangan + $vakasi + $bonus) - $bpjs;
    echo "<i><h4>Total Gaji  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        : Rp.$total_gaji</h4></i>";

    echo "<hr>";
    echo "<center>";
    echo "<h4>... SELAMAT GAJIAN ...</h4>";
    echo "</center>";
    echo "<br>";
    echo "<p align=right><b> Bendahara : $bendahara</b></p>";
    echo "<br>";

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