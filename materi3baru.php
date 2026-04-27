<?php 
 function hello()
 {
    echo "selamat datang di kelas TIA1";

 }
 hello();
 function Tambah(int $a, int $b){
    $hasil = $a + $b;
    return $hasil; 
 }
 echo "<br><br>";
 echo tambah(12, 8);
 
 function Kali(int $a, int $b){
    $hasil = $a * $b;
    return $hasil; 
 }

function Bagi(int $a, int $b){
    $hasil = $a / $b;
    return $hasil; 
 }
 
function Kurang(int $a, int $b){
    $hasil = $a - $b;
    return $hasil; 
 }
 
echo "<br><br>";
?> 

<form method = "POST">
    Masukkan Angka 1 : <input type = "number" name = "angka1">
    Masukkan Angka 2 : <input type = "number" name = "angka2">
    <input type = "submit" name = "kirim" value = "kirim">
</form>

<?php
if (isset($_POST["angka1"])){
    $newangka1 = $_POST["angka1"];
    $newangka2 = $_POST["angka2"]; 
    echo tambah ($newangka1, $newangka2);
    echo "<br>";
    echo kali ($newangka1, $newangka2);
      echo "<br>";
    echo bagi ($newangka1, $newangka2);
      echo "<br>";
    echo kurang ($newangka1, $newangka2);
      
}

