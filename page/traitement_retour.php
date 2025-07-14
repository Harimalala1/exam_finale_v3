<?php
    include('../inc/fonction.php');

    $date_emprunt = $_GET['nom_objet'];
    $date_retour = $_GET['nom'];

    $sql = "UPDATE TABLE projet_finalS2_emprunt SET date_retour = NOW() WHERE id_membre = %s";
    $sql = sprintf($sql,$_SESSION['id_membre']);
    $requet = mysqli_query(dbconnect(),$sql);

    header('Location: fiche_emprunt_membre.php?id_membre='.$_GET['id_membre']);
?>