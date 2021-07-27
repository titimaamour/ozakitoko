<!DOCTYPE html>
<html lang="en">
<?php
	include("./inc/head.php")
?>
<body>
     <?php
          include("./inc/en-tete.php");
          if(!isset($_COOKIE['client'])){
               header("Location:inscription.php");
          }

          $data = $client->afficher_par_mail($_COOKIE['client']);
          $clientID = $data['id'];
          setcookie('clientID',"$clientID");
     ?>
     <div class="section" id="monCompte">
          <h2>Nom : <?php echo $data['nom'] ?></h2>
          <h2>Prenom : <?php echo $data['prenom'] ?></h2>
          <h2>Mail : <?php echo $data['email'] ?></h2>
          <h2>Numero Client : oza<?php echo $data['id'] ?></h2>
          <a  href="./compte.php?deconnexion=true">
               <button class="btn-one">Deconnexion </button>
          </a>
     </div>
 
     <?php
          include("./inc/pied-de-page.php")
     ?>
</body>
</html>