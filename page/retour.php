<?php
    include('../inc/fonction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="bg-light rounded shadow col-md-5 case_index p-5 mt-4">
        <form action="traitement_retour.php" method="get">
                <p>Etat de l'objet <input type="text" name="etat" placeholder="Etat de l'objet"></p>\
                <input type="hidden" value="<?php echo $_GET['id_membre']?>" id="">
                <input type="submit" value="Valider">
        </form>
    </div>
</body>
</html>