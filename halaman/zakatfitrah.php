<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zakat Fitrah</title>
</head>
<body>
<div class="halaman">
  <div class="fitrah">
	<h1>Zakat Fitrah</h1>
  <p>
    Zakat fitrah adalah zakat diri yang diwajibkan atas diri setiap individu laki-laki
    <br>
    maupun perempuan muslim yang berkemampuan sesuai syarat-syarat yang ditetapkan.</p>
  <form name="form1" action="" method="POST">
     <select name="zakatfitrah" class="pilih">
         <option value="fitrahberas">Fitrah Uang</option>
         <option value="fitrahberat">Fitrah Beras</option>
     </select><br><br>
         <label class="label">Harga Beras Saat ini</label>
         <input type='text' name='bil1' class="jumlah"> <br><br>
         <input type="submit"  name='hitung' value="Hitung" class="submit" href="#">
  </form>
  </div>
</body>
</html>

<?php
    if(isset($_POST['hitung'])) {
        $hargaberas=$_REQUEST['bil1'];    
        $zakatfitrah=$_REQUEST['zakatfitrah'];    
        
        if($zakatfitrah=='fitrahberas') {
            $bayar= 35/10 * $hargaberas;
            echo "<br> <h2 class='hasil'>Zakat yang harus dibayar adalah Rp. $bayar</h2>";
        }
        elseif($zakatfitrah=='fitrahberat') {
            $bayar= 25/10 * $hargaberas;
            echo "<br> <h2 class='hasil'>Beras yang harus dibayar adalah Rp. $bayar</h2>";
        }
    }
?>