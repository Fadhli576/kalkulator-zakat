<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style.css" rel="stylesheet">
    <title>Kalkulator Zakat</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
                <h1>Kalkulator Zakat</h1>
        </div>    
        <div class="list">
			<ul>  
                <li> <a href="index.php?page=home">Beranda</a></li>
                <li> <a href="index.php?page=zakatfitrah">Fitrah</a></li>
                <li> <a href="index.php?page=zakatmal">Mal</a></li>
				<li> <a href="index.php?page=zakatmal2">Mal(Ada yang dipakai)</a></li>
        </ul>
		</div>
    </div>
    <?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
		
				switch ($page) {
					case 'home':
						include "halaman/home.php";
						break;
					case 'zakatfitrah':
						include "halaman/zakatfitrah.php";
						break;
					case 'zakatmal':
						include "halaman/zakatmal.php";
						break;
					case 'zakatmal2':
						include "halaman/zakatmal2.php";
						break;				
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
			}else{
				include "halaman/home.php";
			}
	?>
</body>
</html>