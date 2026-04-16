<form method = "POST">
    masukkan angka : <input type="number" name="angka">
    <input type="submit" name="kirim" value="kirim">
</from>

<?php
if (isset($_POST["angka"])){
    $newangka = $_POST["angka"];
    for($i=1; $i <= $newangka; $i++){
        echo "ini angka $i <br>";
    }
}

?> 