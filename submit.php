<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf_8">
        <title>Submit</title>
    </head>
    <body>
        <h1>Données entrées</h1>
        <a href="form.php">Retour au Formulaire</a>
        <p>
            Prenom : <?php echo ($_POST["prenom"])?><br>
            Nom: <?php echo ($_POST['name'])?><br>
            Email: <?php echo ($_POST['user_mail'])?><br>
            Commentaire: <?php echo ($_POST['text'])?><br>
        </p>
    </body>
</html>
