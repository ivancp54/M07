<?php
if (isset($_GET['numID'])){
    $id = $_GET['numID'];

 $db_host = "localhost";
 $db_nombre = "products";
 $db_usuario = "root";
 $db_passwd = "";

 $conexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);
 $sql = "DELETE FROM productos WHERE numID='$id'";
 $productos = mysqli_query($conexio, $sql);
 header("Location:index.php");
}
?>