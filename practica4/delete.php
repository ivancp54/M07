
<?php

$id = $_GET['id'];

try {
  $conn = new PDO("mysql:host=localhost;dbname=products", 'root', '');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sqldel = "DELETE FROM `productos` WHERE `NumID`='$id'";

  // use exec() because no results are returned
  $conn->query($sqldel);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo "<br>" . $e->getMessage();
}
Header("location:index.php");

?>