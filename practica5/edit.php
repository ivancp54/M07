<?php
if (isset($_GET['NumID'])){
    $id = $_GET['NumID'];
$sql = "DELETE FROM productos WHERE NumID=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$id]);
header("Location: index.php");
}
?>