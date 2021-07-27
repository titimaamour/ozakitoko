<!DOCTYPE html>
<html lang="en">
<?php
     require_once("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/inc/head.php");
     if(isset($_GET['del'])){
          $delProd = $prod->supprimer($_GET['del']);
     }

     $data = $client->afficher();
?>
<body>
    
    
     <div class="section">
          <h2>Liste </h2>
          <table class="listeTable">
               <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Mail</th>
               </tr>
               <?php
                    foreach ($data as $produit) {
                         
               ?>
               <tr>
                    <td><?php echo $produit['id'] ?></td>
                    <td><?php echo $produit['nom'] ?></td>
                    <td><?php echo $produit['prenom'] ?></td>
                    <td><?php echo $produit['email'] ?></td>
               </tr>
               <?php } ?>
               
               
          </table>
          <a href="/ozakitoko/admin/tableau.php">
               <button class="btn-admin">Retour</button>
          </a>
     </div>

</body>
</html>