
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
<form action="enkripsi_act.php" method="post" data-ajax="false">
  <div class="cont">
    <div class="form sign-in">
    <h2>Vignere Chiper</h2>
      <label>
        <span for="basic">Masukkan Plain Text</span>
        <input name="plain">
      </label>
      <label>
        <span for="basic">Masukkan Kunci</span>
        <input name="kunci">
      </label>
      <button class="submit" type="submit">Encrypt</button>
      <button class="submit" type="reset">Hapus</button>
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
