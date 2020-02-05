<?php
if(isset($_POST['envoyer'])){

    extract($_POST);


    mail('ndongoridial@gmail.com', 'Bienvenu $nom $prenom', 'votre message est en cour de traitement', 'Baayfall@gmail.com');
}
?>