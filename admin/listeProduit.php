<!DOCTYPE html>
<html lang="en">
<?php
     require_once("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/inc/head.php");
     
     if(isset($_GET['del'])){
          $delProd = $prod->supprimer($_GET['del']);
     }

     $data = $prod->afficher();
?>
<body>
    
    
     <div class="section">
          <h2>Liste</h2>
          <table class="listeTable">
               <tr class="headerRow">
                    <th>ID</th>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>supprimer</th>
                    <th>lien</th>
               </tr>
               <?php
                    foreach ($data as $produit) {
                         
               ?>
               <tr>
                    <td><?php echo $produit['id'] ?></td>
                    <td><?php echo $produit['nom'] ?></td>
                    <td><?php echo $produit['prix'] ?> CFA</td>
                    <td><?php echo $produit['description'] ?></td>
                    <td><?php echo $produit['img'] ?></td>

                    <td><a href="<?php echo $_SERVER['PHP_SELF'] ?>?del=<?php echo $produit['id']?>"> cliquer ici </a></td>
                    <td><a href="/ozakitoko/produit.php?produit=<?php echo $produit['id']?>"> cliquer ici </a></td>
               </tr>
               <?php } ?>
          </table>
          <a href="/ozakitoko/admin/tableau.php">
               <button class="btn-admin">Retour</button>
          </a>
     </div>

</body>
</html>