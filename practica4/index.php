<?php

try {
   //Connexió a la BBDD
   $myCon = new PDO('mysql:host=localhost; dbname=products', 'root', '');
   //Creem la consulta sql
   $sql ="SELECT * FROM productos";

} catch (PDOException $e) {
   echo "error de connexió: " . $e->getMessage() . "<br/>";
   die();
}

?>

<table class="table">
   <thead>
   <tr>

       <th scope="col">#</th>
       <th scope="col">NumID</th>
       <th scope="col">Name</th>
       <th scope="col">Description</th>
       <th scope="col">Price</th>
   </tr>
   </thead>
   <tbody>

   <?php foreach ($myCon->query($sql) as $i => $product){ ?>
       <tr>
           <th scope="row"><?php echo $i +1 ?></th> <!-- augmentem el index i -->
           <td><?php echo $product['NumID'] ?></td> <!--Accedim a NumID -->
           <td><?php echo $product['Name'] ?></td> <!--Accedim a Name-->
           <td><?php echo $product['Description'] ?></td> <!--Accedim a Description-->
           <td><?php echo $product['Price'] ?></td> <!--Accedim a Price -->
           <td><a href="edit.php?id=<?php echo $product['NumID']?>"><button type="button" class="btn btn-outline-primary">Edit</button></a></td>
           <td><a href="delete.php?id=<?php echo $product['NumID']?>"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
           
       </tr>
   <?php } ?>
   </tbody>
</table>

<!-- SECCIÓ PER AFEGIR PRODUCTES -->
<div class="container p-4">
   <div class="row">
       <div class="col-md-4">
           <div class="card card-body">
               <!-- A través del mètode POST li enviem les dades del formulari a l'arxiu add_product.php -->
               <form action="add.php" method="POST">
                   <div class=form-group>
                       <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                   </div>
                   <div class=form-group>
                       <textarea name="description" rows="3" class="form-control" placeholder="Description"></textarea>
                   </div>
                   <div class=form-group>
                       <input type="text" name="price" class="form-control" placeholder="price">
                   </div>
                   <td><button type="submit" class="btn btn-outline-primary">ADD</button></td>
               </form>
           </div>
       </div>
   </div>
</div>

