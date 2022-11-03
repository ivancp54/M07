
<form action="add_product.php"method="post">
             
             <p>
                            <label for="name">name:</label>
                            <input type="text" name="name" id="name">
                         </p>
              
                          
             <p>
                            <label for="description">description:</label>
                            <input type="text" name="description" id="description">
                         </p>
              
                          
             <p>
                            <label for="price">price:</label>
                            <input type="text" name="price" id="price">
                         </p>
                         <input type="submit" value="add_product">

<?php
 $db_host = "localhost";
 $db_nombre = "products";
 $db_usuario = "root";
 $db_passwd = "";

 $conexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

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
    
?>
</form>