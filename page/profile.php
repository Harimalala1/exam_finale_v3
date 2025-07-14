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
    <img src="./images/<?php echo $image ?>" alt="" width="100px">
<form action="traitement_upload.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="media">Fichier (image)</label>
            <input type="file" id="media" name="fichier" accept="image/*" required>
        </div>
        <button type="submit" class="btn-upload">Mettre a jour</button>
    </form>
</body>
</html>