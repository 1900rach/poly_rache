<?php
      require('database.php');
      ?>

<?php
if (isset($_POST['valider'])) {
  if(!empty($_POST['nom']) AND !empty($_POST['pwd'])){
      $nom=$_POST['nom'];
      $pwd=$_POST['pwd'];
      $papa = $bdd->prepare('INSERT INTO eleve(nom, password) VALUES (? ,?)');
      $papa->execute(array($nom, $pwd));
      
      echo "<script> alert('Vous avez été bien enregistré attendez  maintenant inscriver vous je vous prie ')</script>";
        
    }else {
    echo "<script> alert('Une erreur est survenue')</script>";
   }   
}
?>