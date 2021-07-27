<!DOCTYPE html>
<html lang="en">
<?php
     require_once("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/inc/head.php");
?>
<body>
    
    
     <div class="section">
          <h2>Bienvenue sur le tableau de bords, veuillez selectionner une des options suivantes pour commencer !</h2>
          <div class="option">
               <a class href="./ajouterProduit.php">
                    <button class="btn-admin">ajouter un produit</button>
               </a>
               <a href="./listeProduit.php">
                    <button class="btn-admin">Liste des produits</button>
               </a>
               <a href="./listeClient.php">
                    <button class="btn-admin">liste des clients</button>
               </a>
               <a href="./listeCommande.php">
                    <button class="btn-admin">liste des commandes</button>
               </a>
               
          </div>
     </div>

</body>
</html>