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
        <form action="traitement_emprunt.php" method="get">
                <h2>Emprunter le:</h2>
                    <input type="date" name="date_emprunt" placeholder="Date d'emprut">
                <h3>Jusqu'au:</h3>
                    <input type="date" name="date_retour" placeholder="Date de retour">
                    <input type="submit" value="Valider">
        </form>
    </div>
</body>
</html>