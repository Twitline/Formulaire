<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>Formulaire</title>
    </head>
    <body>
        <header>
            <h4>TP Formulaire</h4>
            <nav>
                <a>Acceuil</a>
            </nav>
        </header>
        <div class="column">
            <div class="aside">
                <h3>Nous contacter</h3>
                <p>Nous serions ravi de vous entendre</p>
            </div>
            <div class="main">
                <form method="POST" action="submit.php">
                    <div class="champ">
                        <label for="prenom">Prenom*</label><br>
                        <input type="text" name="prenom">
                    </div>
                    <div class="champ">
                        <label for="name">Nom de famille*</label><br>
                        <input type="text" name="name">
                    </div>
                    <div class="champ">
                        <label for="mail">Email*</label><br>
                        <input type="email" id="mail" name="user_mail">
                    </div>
                    <div class="champ">
                        <label>Commentaire*</label><br>
                        <textarea rows="6" name="text" value=""></textarea>
                    </div>
                    <div>
                        <button type="submit">Soumetre</button>
                    </div>
                </form>  
            </div>
        </div>
    </body>
</html>