<!doctype html>
<html lang="en">
<?php
 $db_host = "localhost";
 $db_nombre = "products";
 $db_usuario = "root";
 $db_passwd = "";

 $conexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);
 $consulta = "SELECT * FROM productos";
 $productos = mysqli_query($conexio, $consulta);
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <style>
        body{
            padding:50px
        }
    </style>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">numID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $i => $product) { ?>
            <tr>
                 
                <td><?php echo $product['numID'] ?> </td>
                <td><?php echo $product['Name'] ?> </td>
                <td><?php echo $product['Description'] ?></td>
                <td><?php echo $product['Price'] ?></td>
                <td><a href="delete.php?numID=<?php echo $product['numID']?>"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>

            </tr>
        <?php } ?>


        


    </tbody>
    </table>
    <td><a href="add_product.php"><button type="button" class="btn btn-outline-primary">ADD</button></a></td>
</body>

</html>