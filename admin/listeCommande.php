<!DOCTYPE html>
<html lang="en">
<?php
     require_once("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/inc/head.php");
     $data = $commande->afficher();
     if(isset($_GET['finir'])){
          $finCommande = $commande->commandeFini($_GET['finir']);
          header("Location:listeCommande.php");
     }
     if(isset($_GET['filtre'])){
          if($_GET['filtre'] == 'nouveau'){
               $data = $commande->afficher_nouveau();

          }else if($_GET['filtre'] == 'Fini'){
               $data = $commande->afficher_fini();

          }
          
     }
?>
<body>
    
    
     <div class="section">
          <h2>Liste des commande <?php if(isset($_GET['filtre'])){ echo $_GET["filtre"]; }?></h2>
          <table class="listeTable">
               <tr>
                    <th>ID</th>
                    <th>Nom client</th>
                    <th>Adresse</th>
                    <th>Mail</th>
                    <th>Nom produit</th>
                    <th>Quantite</th>
                    <th>Total</th>
                    <th>Finir</th>
               </tr>

               <?php
                    foreach ($data as $produit) {
                         
               ?>
               <tr>
                    <td><?php echo $produit['id'] ?></td>
                    <td><?php echo $produit['nom']." ".$produit['prenom']?></td>
                    <td><?php echo $produit['adresse'] ?></td>
                    <td><?php echo $produit['mail'] ?></td>
                    <td><?php echo $produit['nomProduit'] ?></td>
                    <td><?php echo $produit['quantite'] ?></td>
                    <td><?php echo bcmul($produit['prix'],$produit['quantite'])?></td>
                    <?php if($produit["status"] != "fini"){?>
                    <td><a href="/ozakitoko/admin/listeCommande.php?finir=<?php echo $produit['id']?>"> cliquer ici </a></td>
                    <?php } ?>
               </tr>
               <?php } ?>


               
          </table>
          <table>
               <tr>
                    <td>
                              Filtre :
                    </td>
                    <td>
                         <a href="/ozakitoko/admin/listeCommande.php?filtre=nouveau">
                              <button class="btn-one">Nouveau</button>
                         </a>
                    </td>
                    
                    
                    <td>

                         <a href="/ozakitoko/admin/listeCommande.php?filtre=Fini">
                              <button class="btn-one">Fini</button>
                         </a>
                    </td>
                    <td>
                         <a href="/ozakitoko/admin/listeCommande.php">
                              <button class="btn-one">Tous</button>
                         </a>
                    </td>
               </tr>
          </table>
          <a href="/ozakitoko/admin/tableau.php">
               <button class="btn-admin">Retour</button>
          </a>
     </div>

</body>
</html>