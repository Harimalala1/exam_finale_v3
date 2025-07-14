<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>index</title>
</head>
<body>
   <main>
    
        <div class="bg-light rounded shadow col-md-5 case_index p-5 mt-4">
            <h3 class="text-center">Log in</h3>
            <form action="./page/traitement_log.php" method="get" class="mb-4">
                <input type="text" name="nom" placeholder="Nom" class="col-md-10 ms-4 mb-4">
                <input type="email" name="email" placeholder="email" class="col-md-10 ms-4 mb-4">
                <input type="submit" value="Se connecter" class="col-md-7 sub">
            </form>
            <a href="./page/insciption.php" class=" text-white sin p-2 rounded">S'inscrire</a>
        </div>
    </main>
</body>
</html>