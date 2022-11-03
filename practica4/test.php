<?php

class Test extends Db {

    public function getProducts(){
    
    $sql = "SELECT * FROM productos";
    
    $consulta = $this->connect()->query($sql);
    
    while($row = $consulta->fetch()){
    
    echo $row['Name'] . '<br>';
    
    }
    
    }
}

?>