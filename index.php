<!DOCTYPE html>
<html lang="en">
<?php
	include("./inc/head.php")
?>
<body>
     <?php
          include("./inc/en-tete.php")
     ?>
     <div class="section" id="mainImg">
          <h2>Jusqu'a 25% sur tout les produits disponibles sur notre site</h2>
          <p>Avec Oza Kitoko, Laissez votre beaute s'exprimer completement !</p>
          

     </div>
     <div class="section" id="topProduit">
          <div class="topImg">
               <img width="100%" src="./img/banner.png" alt="">

          </div>
          <div class="topText">
               <h2>Avec notre proudre au epice de la lavande, nous vous offrons une toutes nouvelles peaux !</h2>
               <a href="#">
                    <button class="btn-one">Voir!</button>
               </a>
          </div>
     </div>
    
     <div class="section" id="nosProduits">
          <h2>Nos produits</h2>
          <div id="gridProduit">
               <?php
                    $data = $prod->afficher();

                    foreach ($data as $produit ) {
               ?>
               <a href="./produit.php?produit=<?php echo $produit['id'] ?>">
                    <h4><?php echo $produit['nom'] ?></h4>
                    <div class="imgProduit">
                         <img width="100%" src="./img/<?php echo $produit['img'] ?>" alt="">
                    </div>
                    <p><?php echo $produit['prix'] ?> FCFA</p>
                    <p class="voir">Voir</p>
               </a>
               <?php } ?>
          </div>
     </div>
     <?php
          include("./inc/pied-de-page.php")
     ?>
</body>
</html>