<!DOCTYPE html>
<html>
<head>
	<title>How to Design Login & Registration Form Transition</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="skin1.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>

<?php
$key = $_GET["key"];
$nmfile = "enkripsi.txt";
$fp = fopen($nmfile,"r"); // buka file hasil enkripsi
$isi = fread($fp,filesize($nmfile));
for($i=0;$i<strlen($isi);$i++)
{
$kode[$i]=ord($isi[$i]); // rubah ASII ke desimal
$b[$i]=($kode[$i] - $key ) % 256; // proses dekripsi Caesar
$c[$i]=chr($b[$i]); //rubah desimal ke ASCII
}      
?>

<form action="dekripsi.php" method="get">
  <div class="cont">
    <div class="form sign-in">
    <h2>Caesar Chiper</h2>
      <label>
        <span>Kalimat Cipherteks</span><br>
        <textarea class="form-control" name="plain" ><?php for($i=0;$i<strlen($isi);$i++){
echo $isi[$i];} ?></textarea>
      </label>
      <label>
        <span>Hasil Dekripsi</span>
        <textarea class="form-control" name="plain" ><?php for ($i=0;$i<strlen($isi);$i++){
echo $c[$i];} ?></textarea>
      </label>
      <button class="submit" type="submit">Decrypt</button>
      <button class="submit" type="button" onclick="document.location='../index.php'">Home</button>
  </div>
  <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Apa itu?</h2>
          <p>Cari tau apa itu sandi Caesar Cipher dengan klik dibawah!</p>
        </div>
        <div class="img-text m-in">
          <h2>Paham?</h2>
          <p>Jika ingin menggunakan Enkripsi Caesar Cipher klik dibawah!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Cari Tau</span>
          <span class="m-in">Kembali</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Caesar Cipher</h2>
        <label>
          <span>Caesar Chiper adalah algoritma kriptografi klasik yang dahulu digunakan oleh Julius Caesar untuk mengirimkan pesan rahasia atau taktik militer. Caesar Chiper disebut juga Sandi Geser sebab huruf-huruf dalam plainteks digantikan oleh huruf lainnya dalam posisi tertentu dalam susunan alfabet.</span>
      </div>
    </div>
  </div>
  </form>
<script type="text/javascript" src="script2.js"></script>
</body>
</html>
