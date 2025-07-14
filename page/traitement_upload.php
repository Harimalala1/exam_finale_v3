<?php
    include('../inc/fonction.php');
    $uploadDir = __DIR__.'/images/';
    $maxSize = 5 * 1024 * 1024; // 5 Mo
    $allowedMimeTypes = ['image/jpeg', 'image/png'];
    // Vérifie si un fichier est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fichier'])) 
    {
        $file = $_FILES['fichier'];
        if ($file['error'] !== UPLOAD_ERR_OK) 
        {
        die('Erreur lors de l’upload : ' . $file['error']);
        }
        // Vérifie la taille
        if ($file['size'] > $maxSize) 
        {
            die('Le fichier est trop volumineux.');
        }
        // Vérifie le type MIME avec `finfo`
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $file['tmp_name']);
        finfo_close($finfo);
        if (!in_array($mime, $allowedMimeTypes)) 
        {
            die('Type de fichier non autorisé : ' . $mime);
        }
        // renommer le fichier
        $originalName = pathinfo($file['name'], PATHINFO_FILENAME);
        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $newName = $originalName . '_' . uniqid() . '.' . $extension;
        // Déplace le fichier
        if (move_uploaded_file($file['tmp_name'], $uploadDir . $newName))
        {
            echo "Fichier uploadé avec succès : ". $newName;
            $id_membre = id_membre_connecte($_SESSION['nom_con']);
            $sql_creer_conv = "UPDATE projet_finalS2_membre SET image_profil = '%s' WHERE id_membre = %s";
            $sql_creer_conv = sprintf($sql_creer_conv,$newName, $id_membre);
            echo $sql_creer_conv;
            $requet = mysqli_query(dbconnect(),$sql_creer_conv);

            header('Location: profile.php');
        }
        else 
        {
            echo "Échec du déplacement du fichier.";
        }
    } 
    else 
    {
        echo "Aucun fichier reçu.";
    }
?>