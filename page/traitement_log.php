<?php
    include('../inc/fonction.php');

    $nom = $_GET['nom'];
    $email = $_GET['email'];

    $sql = "SELECT * FROM projet_finalS2_membre WHERE nom = '%s' AND email = '%s'";
    $sql = sprintf($sql,$nom, $email);
    $requet = mysqli_query(dbconnect(),$sql);
    $result = mysqli_fetch_assoc($requet);
    if (isset($result)) 
    {
        $_SESSION['nom_con'] = $nom;
        $_SESSION['id_membre'] = $result['id_membre'];
        header('Location: accueil.php');
    }
    else
    {
        header('Location: ./index.php?er=1');
    }
?>