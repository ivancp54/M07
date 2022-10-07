<?php
   $nom = "John";
   $cognoms = "Doe";
   $edat = 30;
   $data = date_create("1986-03-11");
   $telefon = "935555555";
   $adreçap = "BlackPool";
   $adreçae = "oswin@dr.who";
   $treballa = false;
   $alçada = 150;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  
<h1>Describint a <?php echo $nom?> <?php echo $cognoms ?></h1>
<h2>Les dades de <?php echo $nom?> son:</h2>
<form>
    <ul>
        <li>Es diu: <?php echo $nom?> <?php echo $cognoms ?></li>
        <li>Te <?php echo $edat?> anys</li>
        <li>Va neixer l'any:  <?php echo date_format($data,"Y-m-d");?></li>
        <li>El seu telefon es: <?php echo $telefon?></li>
        <li>Viu a <?php echo $adreçap?></li>
        <li>El seu e-mail es el  <?php echo $adreçae?></li>
        <li>i actualment <?php if($treballa){echo "si";}else{echo "no";}?> treballa</li>
    </ul>
</form>


</body>
</html>