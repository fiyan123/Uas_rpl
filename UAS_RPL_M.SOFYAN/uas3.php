<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Form Pengulangan Uas</title>
   </head>
   <body bgcolor="black" text="white">
       <form method="POST">
           <fieldset>
           <legend><i>Perulangan</i></legend>
           <center>
           <table>
               <h2>FORM PENGULAGAN</h2>
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
                   <td><input type="submit" name="save" value="SEND"></td>
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
            echo "<i>Berikut Deret Bilangan Ganjil</i>";
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