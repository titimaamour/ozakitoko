<?php
     include_once("".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/connection/Base.php");

     class Produit
     {
          public function __construct()
          {
               $this->db = new Base();               
          }

          // SELECT
          public function afficher()
          {    
               $query = "select * from produit";
               $result = $this->db->select($query);
               return $result;
          }
          public function afficher_par_id($id)
          {
               
               $query = "select * from produit WHERE produit.id = $id";
               $result = $this->db->select($query);
               foreach ($result as $data ) {
                    return $data;
               }
          }



          // CREATE
          public function ajouter_produit($data,$file)
          {    
               $nom = strval($data['nom']);
               $prix = strval($data['prix']);
               $desc = strval($data['desc']);
               $desc = str_replace("'","\'", $desc);

               $file_name = $file['img']['name'];
               $file_temp = $file['img']['tmp_name'];

               $div = explode('.', $file_name);
               $file_ext = strtolower(end($div));
               $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
               $uploaded_image = "".$_SERVER['DOCUMENT_ROOT']."/ozakitoko/img/$unique_image";
       
               move_uploaded_file($file_temp, $uploaded_image);

               $query = "INSERT INTO `produit` (`id`, `nom`, `prix`, `img`, `description`) VALUES (NULL, '$nom', '$prix', '$unique_image', '$desc');";
               $result = $this->db->insert($query);
               if ($result) {
                    $msg = "<span class='success'>Succes</span>";
                    return $msg;
               } else {
                    $msg = "<span class='error'>Echec</span>";
                    return $msg;
               }
          }

          // CREATE
          public function update_produit($id,$data,$old_cat)
          {    
               //CHANGE QUERY
               $nom = $data['nom'];
               $prix = $data['prix'];
               $desc = $data['desc'];
               $img = $data['img'];
               $cat = $data['cat'];
               if(strlen($old_cat)>0){
                    $cat = $old_cat;
               }
               $tag = 'produit';
               $query = "UPDATE `produits` SET `nom_produit` = '$nom', `prix` = '$prix', `description` = '$desc', `img_produit` = '$img', `categorie` = '$cat', `tag` = '$tag' WHERE `produits`.`id` = $id; ";
               $result = $this->db->update($query);
               if ($result) {
                    $msg = "<span class='success'>Succes</span>";
                    return $msg;
               } else {
                    $msg = "<span class='error'>Echec</span>";
                    return $msg;
               }
          }
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