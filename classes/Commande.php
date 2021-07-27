<?php
     include_once("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/connection/Base.php");

     class Commande
     {
          public function __construct()
          {
               $this->db = new Base();               
          }

          // SELECT
          public function afficher()
          {    
               $query = "SELECT client.nom as nom, commande.status as status, client.prenom as prenom, produit.prix as prix, commande.adresseLivraison as adresse, client.email AS mail, produit.nom as nomProduit, commande.quantite as quantite, commande.id as id  from commande left join client on commande.idClient = client.id left join produit on commande.idProduit = produit.id ";
               $result = $this->db->select($query);
               return $result;
          }
          public function afficher_nouveau()
          {    
               $query = "SELECT client.nom as nom, client.prenom as prenom,commande.status as status, produit.prix as prix, commande.adresseLivraison as adresse, client.email AS mail, produit.nom as nomProduit, commande.quantite as quantite, commande.id as id  from commande left join client on commande.idClient = client.id left join produit on commande.idProduit = produit.id where commande.status = 'nouveau' ";
               $result = $this->db->select($query);
               return $result;
          }
          public function afficher_fini()
          {    
               $query = "SELECT client.nom as nom, client.prenom as prenom,commande.status as status, produit.prix as prix, commande.adresseLivraison as adresse, client.email AS mail, produit.nom as nomProduit, commande.quantite as quantite, commande.id as id  from commande left join client on commande.idClient = client.id left join produit on commande.idProduit = produit.id where commande.status = 'fini' ";
               $result = $this->db->select($query);
               return $result;
          }
          
          public function afficher_par_id($id)
          {
               
               $query = "select * from commande WHERE commande.id = $id";
               $result = $this->db->select($query);
               foreach ($result as $data ) {
                    return $data;
               }
          } 
          
          


          // CREATE
          public function ajouter($data)
          {    
               $idProduit = $data['idProduit'];
               $idClient = $data['idClient'];
               $quantite = $data['quantite'];
               $livraison = $data['livraison'];
               $time = date("d-m-Y");
               
               $query = "INSERT INTO `commande` (`id`, `idProduit`, `quantite`, `idClient`, `dateCommande`, `adresseLivraison`) VALUES (NULL, '$idProduit', '$quantite', '$idClient', '$time', '$livraison');";
               $result = $this->db->insert($query);
              
          }

         
          public function commandeFini($id)
          {    
               //CHANGE QUERY
               $query = "UPDATE `commande` SET `status` = 'fini' WHERE `commande`.`id` = '$id'";
               $this->db->update($query);
               
          }
          
     }