<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    
   <main>
        <div>
            <form action="traitement_inscription.php" method="get">
                <input type="text" name="nom" placeholder="Nom">
                <input type="password" name="mdp" placeholder="Mot de passe">
                <input type="date" name="date" placeholder="Date de naissance">
                <input type="text" name="genre" placeholder="Genre F ou M ">
                <input type="email" name="email" placeholder="email">
                <input type="text" name="ville" placeholder="Votre ville">
                <input type="submit" value="S'inscrire">
            </form>
        </div>
    </main>
</body>
</html>