<!DOCTYPE html>
<html lang="en">
<?php
     require_once("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/inc/head.php");
     if(isset($_POST['connection'])){
          $conUtilisateur = $utilisateur->connexion($_POST['email'],$_POST['pwd']);
          if($conUtilisateur){
               setcookie("client", $_POST['email']);
               header("Location:/ozakitoko/admin/tableau.php");
          }else{
               header("<script>alert('Erreur : Veuillez reessayer !')");
          }
          
     }
?>
<body>
    
    <div class="spacer150"></div>
     <div class="section" id="formulaire">
          <div class="formulaire">
               <h1>Connection</h1>
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
                         <input type="submit" value="Connection" name="connection">
                    </div>

               </form>
          </div>
         <div class="image">

         </div>
          
     </div>

</body>
</html>