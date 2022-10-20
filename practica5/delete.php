<?php

//ESPECIFICANDO UN ID DIRECTAMENTE FUNCIONA, TRAS VARIOS INTENTOS POR PASARLE UN ID POR PARAMETRO NO NOS FUNCIONA.

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sqldel = "DELETE FROM productos WHERE NumID=10";

  // use exec() because no results are returned
  $conn->exec($sqldel);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sqldel . "<br>" . $e->getMessage();
}

$conn = null;
?>