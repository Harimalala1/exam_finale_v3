<?php
    include('../inc/fonction.php');

    $nom = $_GET['nom'];
    $mdp = $_GET['mdp'];
    $ville = $_GET['ville'];
    $genre = $_GET['genre'];
    $email = $_GET['email'];
    $date = $_GET['date'];

    $sql = "INSERT INTO projet_finalS2_membre (nom, date_de_naissance, genre, email, ville, mdp) VALUES ('%s', '%s', '%s', '%s', '%s','%s')";
    $sql = sprintf($sql,$nom, $date, $genre, $email, $ville, $mdp);
    $requet = mysqli_query(dbconnect(),$sql);

    $_SESSION['nom'] = $nom;
    header('Location: ./accueil.php');
?>