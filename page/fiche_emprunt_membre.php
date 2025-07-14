<?php
    include('../inc/fonction.php');
    $membre = $_GET['nom_membre'];
    $id_membre = id_membre($membre);
    $emprunt = emprunt_membre($_SESSION['id_membre']);
    $taille = 0;
    while (isset($emprunt[$taille])) 
    {
        $taille++;
    }
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
    <?php include('header.php') ?>
    <h2 class="text-center mb-4 mt-4">Mmembre : <?php echo $membre ?></h2>

    <table  class="table table-striped table-hover container shadow text-center">
        <thead>
            <tr>
                <th>Objet</th>
                <?php if ($id_membre == $_SESSION['id_membre']) { ?>
                    <th>Bouton</th>
               <?php }?>
            </tr>
        </thead>
        
        <tbody>
            <?php for ($a = 0; $a < $taille; $a++) {?>
                    <tr>
                        <?php $obj = objet_nom($emprunt[$a]['id_objet'])?>
                        <td><?php echo $obj?></td>
                <?php if ($id_membre == $_SESSION['id_membre']) { ?>
                    <td>
                    <a class="nav-link nav_case me-4" href="retour.php?id_membre=<?php echo $id_membre?>">Retour</a>
                    </td>
               <?php }?>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>