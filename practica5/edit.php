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
    <input type="submit" value="Change Product">

    <?php
    $db_host = "localhost";
    $db_nombre = "products";
    $db_usuario = "root";
    $db_passwd = "";

    $conexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

    if (isset($_GET['NumID'])){
        $id = $_GET['NumID'];
        $sql = "UPDATE `products` SET `Name`='[value-1]',`Description`='[value-2]',`price`='[value-3]',`NumID`='[value-4]',`q_sold`='[value-5]' WHERE 1";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$id]);
        header("Location: index.php");
    }

    ?>
</form>