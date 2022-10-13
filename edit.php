
<form action="edit.php"method="get">

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

    if (isset($_GET['name'])){
        $numID = random_int(0, 1000);
        $nom = $_GET['name'];
        $descripcio = $_GET['description'];
        $preu = $_GET['price'];
        $sql = "UPDATE `productos` SET (Name,Description,Price,numID) VALUES('".$_GET['name']."','".$_GET['description']."','".$_GET['price']."','".$numID."')";
        $productos = mysqli_query($conexio, $sql);
        header("Location:index.php");

    }

    ?>
</form>