<?php
    include('../inc/fonction.php');

    $nom_objet = $_GET['nom_objet'];
    $nom_membre = $_GET['nom'];

    $sql = "INSERT INTO projet_finalS2_objet_membre (nom_objet, nom_membre) VALUES ('%s', '%s')";
    $sql = sprintf($nom_objet,$nom_membre);
    $requet = mysqli_query(dbconnect(),$sql);

    header('Location: ./accueil.php');
?>