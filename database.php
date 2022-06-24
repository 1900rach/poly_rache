<?php
       try {
           $bdd = new PDO('mysql:host=localhost;dbname=vente_azimut','root','');
       } catch (Exception $e) {
           die('Erreur :'.$e->getMessage());
       }
?>