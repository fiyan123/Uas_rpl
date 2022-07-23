<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajian Karyawan</title>
</head>
<body bgcolor="black" text="white">
    <form method="POST">
        <center>
            <table>
            <fieldset>
            <legend><i>Struktur Gaji</i></legend>
                <h4>Penggajihan Karyawan</h4>
                <h2>PT . SELALU MAKMUR JAYA ABADI</h2>
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
                <td><input type="submit" name="save" value="SEND"></td>
            </tr>
            </table>
        </center>
    </form>
    </fieldset>
</body>
</html>


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

    echo "Nama Karyawan   &nbsp;   &nbsp;    &nbsp;                                                                  : $pekerja";
    echo "<br>";
    echo "Jenis Kelamin   &nbsp;   &nbsp;    &nbsp;&nbsp;   &nbsp;&nbsp;                                               : $jk ";
    echo "<br>";
    echo "Pendidikan Terakhir&nbsp;                                                                                  : $pendidikan";
    echo "<br>";
    echo "Jabatan    &nbsp;&nbsp; &nbsp; &nbsp;   &nbsp;    &nbsp;   &nbsp;   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : $jabatan";
    echo "<br>";
    echo "Gaji     &nbsp;   &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;  &nbsp; &nbsp;   : Rp.$gaji";

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
    echo "<i><h4>Total Gaji  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;         : Rp.$total_gaji</h4></i>";

    echo "<hr>";
    echo "<center>";
    echo "<h4>... SELAMAT GAJIAN ...</h4>";
    echo "</center>";
    echo "<br>";
    echo "<p align=right><b> Bendahara : $bendahara</b></p>";
    echo "<br>";

}
?>