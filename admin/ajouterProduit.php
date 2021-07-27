<!DOCTYPE html>
<html lang="en">
<?php
     require_once("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/inc/head.php");
?>
<body>
    <?php
          if(isset($_POST['ajouter'])){
               $ajou = $prod->ajouter_produit($_POST,$_FILES);
          }
    ?>
    
     <div class="section">
          <h2>Ajouter un produit !</h2>
          <form action="" method="post" enctype="multipart/form-data">
               <div class="formChild">
                    <label>Nom produit</label>
                    <input required type="text" name="nom" id="nom" placeholder="nom produit">
               </div>
               <div class="formChild">
                    <label>Prix produit</label>
                    <input required type="number" name="prix" id="prix" placeholder="prix produit">
               </div>
               <div class="formChild">
                    <label>description produit</label>
                    <textarea required   name="desc" id="desc" placeholder="description produit"></textarea>
               </div>
               
               <div class="formChild">
                    <label>Image produit</label>
                    <input required type="file" name="img" id="img" placeholder="Votre mot de passe">
               </div>
               <div class="formChild">
                    <input type="submit" value="ajouter un produit" name="ajouter">
               </div>

          </form>
          
     </div>
     <a href="/ozakitoko/admin/tableau.php">
          <button class="btn-admin">Retour</button>
     </a>
</body>
</html>