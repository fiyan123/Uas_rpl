<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Miko Mall</title>
</head>
<body bgcolor="black" text="white">
    <form method="POST">
        <fieldset>
        <legend><h4><i>Syarat In Miko</i></h4></legend>
        <center>
        <table>
            <h2><i>Syarat Masuk Miko Mall</i></h2>
            <tr>
                <td>Nama Anda</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
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
                <td><input type="submit" name ="save" value="SEND"></td>
            </tr>
        </table>
        </fieldset>
        </center>
    </form>
</body>
</html>

<?php

if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $status = $_POST['status'];

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
        echo '<a href = "https://www.pedulilindungi.id/"><i><u>Silahkan Daftar></u></i><br></a>';
        echo "<br>";
    }
    echo "</center>";

    echo "</table>";

}

?>
