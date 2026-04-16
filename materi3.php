<form method = "POST">
    masukkan angka : <input type="number" name="angka">
    <input type="submit" name="kirim" value="kirim">
</from>

<?php
if (isset($_POST["angka"])){
   $newangka = $_POST ["angka"];
 for ($i=1; $i <= $newangka; $i++) {
    if ($i % 2 == 0){
        echo "ini angka $i - genap <br>";
    }else{
        echo "ini angka $i - ganjil <br>";
    }
        }
 
    }


?> 