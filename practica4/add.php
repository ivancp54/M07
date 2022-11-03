
<?php


try {
  $conn = new PDO("mysql:host=localhost;dbname=products", 'root', '');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $numero = rand(0,999);
  $nombre = $_POST['name'];
  echo $nombre;
  $des = $_POST['description'];
  $precio = $_POST['price'];
  
  $sqladd = "INSERT INTO `productos` (`Name`, `Description`, `Price`, `NumID`) VALUES('$nombre', '$des', '$precio','$numero')";

  // use exec()
  $conn->query($sqladd);

  echo "Record added successfully";
} catch(PDOException $e) {
  echo "<br>" . $e->getMessage();
}
Header("location:index.php");

?>