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

function login(string $username, string $password){
   $usernamebenar = "admin";
   $passwordbenar = "12345";
   if($username == $usernamebenar && $password == $passwordbenar){
      return true;
   }else{
   return false;
}
}

?>

<form method = "POST">
    <label for = "username">username:</label>
    <input type = "text" name = "username"><br><br>
    <label for = "password">username:</label>
    <input type = "password" name = "password" ><br><br>
    <input type = "submit" name = "login" value = "login"> 
</form>

<?php
if (isset($_POST["login"])){
   $newusername = $_POST["username"];
   $newpassword = $_POST["password"];
   if (login ($newusername, $newpassword)){
      echo "Login Berhasil";
   }else {
      echo "Login Gagal";
   }
}
?>
