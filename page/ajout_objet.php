<?php
    include('../inc/fonction.php');
    $image = pdp_connecte($_SESSION['nom_con']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
        <div>
            <form action="ajout_objet.php" method="get">
                <input type="text" name="nom_objet" placeholder="Nom de l'objet">
                <input type="text" name="nom" placeholder="Nom du membre qui ajoute">
                <input type="submit" value="Ajouter">
            </form>

            <form action="traitement_upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="media">Ajouter image objet</label>
                    <input type="file" id="media" name="fichier" accept="image/*" required>
                </div>
                <button type="submit" class="btn-upload">Valider</button>
            </form>
        </div>
    </main>
</body>
</html>