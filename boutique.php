<!DOCTYPE html>
<html lang="en">
<?php
	include("./inc/head.php")
?>
<body>
     <?php
          include("./inc/en-tete.php")
     ?>
     
    
     <div class="section" id="nosProduits">
          <h2>Boutique</h2>
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