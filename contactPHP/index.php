<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h1>Formulaire à remplir</h1>
        
        <form action="envoie.php" method="post">
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="c100">
                <label for="mail">Email : </label>
                <input type="email" id="mail" name="mail">
            </div>
            <div class="c100">
                <label for="message">Message : </label>
                <textarea type="text" name="message" id="idMes"></textarea>
            </div>
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
            </div>
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer" name="envoyer" onclick="afficher">
            </div>
        </form>

        <h1>Les informations reçues sont :</h1>
    <?php
        if(isset($_POST['envoyer'])) {

           echo 'Prénom : '.$_POST["prenom"].'<br>';
           echo 'Nom : '.$_POST["nom"].'<br>';
           echo 'Email : ' .$_POST["mail"].'<br>';
           echo 'Message : ' .$_POST["message"].'<br>';
           echo 'Sexe : ' .$_POST["sexe"].'<br>';

        }
?>
</body>
</html>