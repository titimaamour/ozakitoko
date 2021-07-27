<!DOCTYPE html>
<html lang="en">
<?php
	include("./inc/head.php")
?>
<body>
     <?php
          include("./inc/en-tete.php");
          $data = $prod->afficher_par_id($_GET['produit']);
          
          if(isset($_POST['commande'])){
               if(isset($_COOKIE['clientID'])){
                    $ajoutCom= $commande->ajouter($_POST);
               }else{
                    header("Location:/ozakitoko/connection.php");
               }
          }
     ?>
     
    
     <div class="section" id="nosProduits">
          <h1><?php echo $data['nom'] ?></h1>
          <div class="produitImgBig">
               <img width="40%" src="./img/<?php echo $data['img'] ?>" alt="">
          </div>
          <div class="section infoProduit">
               <div class="propriete">
                    <h2>Description</h2>
                    <h3><?php echo $data['description'] ?></h3>
               </div>
               <div class="commande">
                    <form action="" method="post" enctype="multipart/form-data">
                         <h2>Commande</h2>
                         <table>
                              <tr>
                                   <td>Nombre a commander :</td>
                                   <td><input value="1" type="number" name="quantite" id="quantite"></td>
                              </tr>
                              <tr>
                                   <td>Adresse de livraison :</td>
                                   <td><input placeholder="Liberte 6, Dakar" required type="text" name="livraison" id="livraison"></td>
                              </tr>
                              <tr style="transform: scale(0);">
                                   <td><input value="<?php echo $data['id'] ?>" type="text" name="idProduit" id="idProduit"></td>
                                   <td><input value="<?php if(isset($_COOKIE['clientID'])){ echo $_COOKIE['clientID']; } ?>" type="text" name="idClient" id="idClient"></td>
                              </tr>
                         </table>
                         <input class="btn-one" name="commande" type="submit" value="commander">    
                    </form>
                    
               </div>
               
          </div>
          
     </div>
     <?php
          include("./inc/pied-de-page.php")
     ?>
</body>
</html>