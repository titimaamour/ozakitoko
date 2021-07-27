<?php
     include_once("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/connection/Base.php");

     class Utilisateur
     {
          public function __construct()
          {
               $this->db = new Base();               
          }

          // SELECT
          public function afficher()
          {    
               $query = "select * from utilisateur";
               $result = $this->db->select($query);
               return $result;
          }
          public function afficher_par_id($id)
          {
               
               $query = "select * from utilisateur WHERE utilisateur.id = $id";
               $result = $this->db->select($query);
               foreach ($result as $data ) {
                    return $data;
               }
          } 
          public function afficher_par_mail($mail)
          {
               
               $query = "select * from utilisateur WHERE utilisateur.email = '$mail'";
               $result = $this->db->select($query);
               foreach ($result as $data ) {
                    return $data;
               }
          }
          public function connexion($mail,$pwd)
          {
               
               $query = "select * from utilisateur WHERE utilisateur.email = '$mail' and utilisateur.pwd = '$pwd'";
               $result = $this->db->select($query);
               if($result){
                    return TRUE;
               }else{
                    return FALSE;
               }
               foreach ($result as $data ) {
                    return $data;
               }
          }
          


          // CREATE
          public function ajouter($data)
          {    
               $nom = $data['nom'];
               $prenom = $data['prenom'];
               $mail = $data['email'];
               $pwd = $data['pwd'];

               
               $query = "INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `pwd`) VALUES (NULL, '$nom', '$prenom', '$mail', '$pwd');";
               $result = $this->db->insert($query);
              
          }

          // CREATE
          
          public function supprimer($id)
          {    
               $query = "DELETE FROM `produit` WHERE `produit`.`id` = $id";
               $result = $this->db->delete($query);
               if ($result) {
                    $msg = "<span class='success'>Succes</span>";
                    return $msg;
               } else {
                    $msg = "<span class='error'>Echec</span>";
                    return $msg;
               }
          }
          
     }