<<<<<<< HEAD
<?php
if (isset($_GET['NumID'])){
    $id = $_GET['NumID'];
$sql = "DELETE FROM productos WHERE NumID=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$id]);
header("Location: index.php");
}
=======
<?php
if (isset($_GET['NumID'])){
    $id = $_GET['NumID'];
$sql = "DELETE FROM productos WHERE NumID=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$id]);
header("Location: index.php");
}
>>>>>>> c323b715b8e326f92be9b486c5a2e9f4d2d3c322
?>