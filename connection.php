<!DOCTYPE html>
<html lang="en">
<?php
	include("./inc/head.php")
?>
<body>
     <?php
          include("./inc/en-tete.php");

          if(isset($_POST['connexion'])){
               $conClient = $client->connexion($_POST['email'],$_POST['pwd']);
               if($conClient){
                    setcookie("client", $_POST['email']);
                    header("Location:/ozakitoko/compte.php");
               }else{
                    echo "ECHEC";
               }
               
          }
     ?>
     
    
     <div class="section" id="formulaire">
          <div class="formulaire">
               <h1>Connexion</h1>
               <form action="" method="post" enctype="multipart/form-data">
                    <div class="formChild">
                         <label>Adresse Mail</label>
                         <input required type="email" name="email" id="email" placeholder="votre adresse mail">
                    </div>
                    <div class="formChild">
                         <label>Mot de passe</label>
                         <input required type="password" name="pwd" id="pwd" placeholder="Votre mot de passe">
                    </div>
                    <div class="formChild">
                         <input type="submit" value="Connexion" name="connexion">
                    </div>

               </form>
               <a href="./inscription.php">Vous n'avez pas de compte ? S'inscrire</a>
          </div>
         <div class="image">

         </div>
          
     </div>
     <?php
          include("./inc/pied-de-page.php")
     ?>
</body>
</html>