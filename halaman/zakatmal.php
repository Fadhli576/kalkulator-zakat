<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakat Mal</title>
</head>
<body>
<div class="halaman">
<h1>Zakat Mal</h1>
    <p>
       Zakat mal adalah sejumlah uang yang wajib dibayarkan atas 
       <br>
       kepemilikan harta kekayaan dan telah memenuhi syarat wajib zakat.
    </p>
    <form name="form1" action="" method="POST">
     <select name="zakatmal" class="pilih">
         <option value="fitrahemas">Emas</option>
         <option value="fitrahperak">Perak</option>
     </select><br><br>
    <label class="label">Emas/Perak yang anda punya</label> <br>
         <input type='text' name='bil1' class="jumlah"> <br>
    <label class="label">Harga Emas/Perak saat ini</label> <br>
         <input type='text' name='bil2' class="jumlah"> <br><br>
         <input type="submit"  name='hitung' value="Hitung" class="submit" href="#">
  </form>
</body>
</html>

<?php
    if(isset($_POST['hitung'])) {
        $emas =$_REQUEST['bil1'];
        $harga=$_REQUEST['bil2'];    
        $zakatmal=$_REQUEST['zakatmal'];    
        
        if($zakatmal=='fitrahemas') {
            $bayar= $emas * $harga * 1/40;
            echo "<br> <h2 class='hasil'>Zakat yang harus dibayar adalah Rp. $bayar</h2>";
        }
        elseif($zakatmal=='fitrahperak') {
            $bayar= ($emas - $harga) * $harga * 1/40;
            echo "<br> <h2 class='hasil'>Beras yang harus dibayar adalah Rp. $bayar</h2>";
        }
    }
?>