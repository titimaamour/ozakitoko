<?php 
     require("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/classes/Produit.php");
     
     $prod = new Produit();

     require("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/classes/Client.php");
     
     $client = new Client();
     
     require("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/classes/Commande.php");
     
     $commande = new Commande();

     require("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/classes/Utilisateur.php");
     
     $utilisateur = new Utilisateur();

     
     
     