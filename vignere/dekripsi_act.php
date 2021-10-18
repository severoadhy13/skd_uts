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
    include "lib/lib.php";
    $hasil_ciper = str_replace(" ", "", $_POST['ciper']);
    $kunci = str_replace(" ", "", $_POST['kunci']);
    $panjang_kunci = strlen($kunci);
    $panjang_ciper = strlen($hasil_ciper);
    $index_x = 0;
    $index_y = 0;
    $hasil_konversi = array();
    $hasil_akhir = "";
    while ($index_x < $panjang_ciper) {
        $x = substr($hasil_ciper, $index_x, 1);
        $y = substr($kunci, $index_y, 1);
        $konversi_x = huruf_ke_angka($x);
        $konversi_y = huruf_ke_angka($y);
        if ($konversi_x >= $konversi_y) {
        $hasil = $konversi_x - $konversi_y;
        } else {
        $hasil = $konversi_x + (26 - $konversi_y);
        }
        $hasil_konversi[$index_x] = angka_ke_huruf($hasil);
        $index_x++;
        $index_y++;
        if ($index_y == $panjang_kunci) {
        $index_y = 0;
        }
    }
    $i = 0;
    $hasil_akhir = "";
    while ($i < $index_x) {
    $hasil_akhir .= $hasil_konversi[$i];
    $i++;
    }
    ?>

<form action="enkripsi_act.php" method="post" data-ajax="false">
    <div class="cont">
        <div class="form sign-in">
        <h2>Hasil Enkripsi</h2>
        <label>
            <span for="basic">Cipherteks</span><br>
            <textarea class="form-control" name="plain" id="textarea-a"><?php echo $hasil_akhir; ?></textarea>
        </label>
        <label>
            <span for="basic">Masukkan Kunci</span>
            <textarea class="form-control" name="kunci" id="textarea-a"><?php echo $kunci; ?></textarea><br>
        </label>
        <button class="submit" type="submit">Encrypt</button>
        <button class="submit" type="button" onclick="document.location='../index.php'">Home</button>
     </div>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Apa itu?</h2>
          <p>Cari tau apa itu sandi Vignere Cipher dengan klik dibawah!</p>
        </div>
        <div class="img-text m-in">
          <h2>Paham?</h2>
          <p>Jika ingin menggunakan Enkripsi Vignere Cipher klik dibawah!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Cari Tau</span>
          <span class="m-in">Kembali</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Vignere Cipher</h2>
        <label>
          <span>Sandi Vigenere adalah metode menyandikan teks alfabet dengan menggunakan deretan sandi Caesar berdasarkan huruf-huruf pada kata kunci. Sandi Vigenère merupakan bentuk sederhana dari sandi substitusi polialfabetik. Kelebihan sandi ini dibanding sandi Caesar dan sandi monoalfabetik lainnya adalah sandi ini tidak begitu rentan terhadap metode pemecahan sandi yang disebut analisis frekuensi.</span>
      </div>
    </div>
  </div>
  </form>
<script type="text/javascript" src="script.js"></script>
</body>
</html>