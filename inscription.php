<!DOCTYPE html>
<html lang="en">
<?php
	include("./inc/head.php")
?>
<body>
     <?php
          include("./inc/en-tete.php");


          if(isset($_POST['inscription'])){
               $ajoutClient = $client->ajouter($_POST);
               setcookie("client", $_POST['email']);
               header("Location:/ozakitoko/compte.php");
          }

     ?>
     
    
     <div class="section" id="formulaire">
          <div class="formulaire">
               <h1>Inscription</h1>
               <form action="" method="post" enctype="multipart/form-data">

                    <div class="formChild">
                         <label>Nom</label>
                         <input required type="text" name="nom" id="nom" placeholder="votre nom">
                    </div>
                    
                    <div class="formChild">
                         <label>Prenom</label>
                         <input required type="text" name="prenom" id="prenom" placeholder="votre prenom">
                    </div>
                    
                    <div class="formChild">
                         <label>Adresse Mail</label>
                         <input required type="email" name="email" id="email" placeholder="votre adresse mail">
                    </div>
                    <div class="formChild">
                         <label>Mot de passe</label>
                         <input required type="password" name="pwd" id="pwd" placeholder="Votre mot de passe">
                    </div>
                    <div class="formChild">
                         <input type="submit" value="inscription" name="inscription">
                    </div>

               </form>
               <a href="./connection.php">Vous avez deja un compte ? Se connecter</a>

          </div>
         <div class="image">

         </div>
          
     </div>
     <?php
          include("./inc/pied-de-page.php")
     ?>
</body>
</html>