<?php
include ('../inc/fonction.php');
$objets = all_objet();
$objets_nouveau = all_objet_nouveau();
$emprunt = all_emprunt();
$taille = 0;
    while (isset($objets[$taille])) 
    {
        $taille++;
    }
    $all_membre = all_membre();
    $count = 0;
    while (isset($all_membre[$count])) 
    {
        $count++;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>accueil</title>
</head>
<body>
    <?php include('header.php')?>
    <section class="col-md-12">
            <h1 class="text-center">Liste des Departements et ces managers en cours</h1>
            
            <div class="container">
                <table  class="table table-striped table-hover shadow text-center">
                    <thead>
                        <tr>
                            <th>Categorie</th>
                            <th>Objet</th>
                            <th>Date de retour d'emprunt</th>
                            <th>bouton</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        <?php for ($i = 0; $i < $taille; $i++) {?>
                                <tr>
                                    <td><?php echo $objets[$i]['Categorie']?> </td>
                                    <td>
                                        <a href="info_objet.php?objet=<?php echo $objets_nouveau[$i]['nom_objet']?>&cat=<?php echo $objets[$i]['Categorie']?>">
                                            <?php echo $objets_nouveau[$i]['nom_objet']?>
                                        </a>
                                    </td>
                                    <td><?php echo $emprunt[$i]['date_retour']?></td>
                                    <td>
                                    <a class="nav-link nav_case me-4" href="emprunt.php">Emprunter</a>
                                    </td>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <h2>Liste des membres</h2>
                <table  class="table table-striped table-hover shadow text-center">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Ville</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        <?php for ($a = 0; $a < $count; $a++) {?>
                                <tr>
                                    <td>
                                        <a href="fiche_emprunt_membre.php?nom_membre=<?php echo $all_membre[$a]['nom']?>">
                                            <?php echo $all_membre[$a]['nom']?>
                                        </a>
                                    </td>
                                    <td><?php echo $all_membre[$a]['ville']?></td>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    

</body>
</html>