<?php
    include('../inc/fonction.php');

    $date_emprunt = $_GET['nom_objet'];
    $date_retour = $_GET['nom'];

    $sql = "INSERT INTO projet_finalS2_emprunt(date_emprunt,date_retour) VALUES ('%s', '%s')";
    $sql = sprintf($sql,$date_emprunt,$date_retour);
    $requet = mysqli_query(dbconnect(),$sql);

    header('Location: accueil.php');
?>