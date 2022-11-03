<form action="edit.php"method="post">

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

    if (isset($_POST['name']) || isset($_POST['description']) || isset($_POST['price'])){
        $id = $_POST['numID'];
        $nom = $_POST['name'];
        $descripcio = $_POST['description'];
        $preu = $_POST['price'];
        $sql = "UPDATE `productos` SET `Name`='$nom',`Description`='$descripcion',`Price`='$preu' WHERE numID='$id'";
        $productos = mysqli_query($conexio, $sql);
        header("Location:index.php");

    }

    ?>
</form>