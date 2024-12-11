<?php

$lid = $_GET["lid"];
require_once "./utils/connect_db.php";

$sql = "SELECT * FROM patients WHERE id LIKE $lid;";

try {

    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $error){
    echo "Erreur lors de la requete :" . $error->getMessage();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/profil.css">
</head>
<body>
    
<header>
        <h2>Rendez-vous Médical</h2>
        <nav>
            <a href="./acc.php">Accueil</a>
            <a href="./utils/liste-clients.php">Liste des Clients</a>
            <a href="./utils/index.php">Créer un compte</a>
        </nav>
    </header>

    <div class="main-container">
        <h1>Détails du Patient</h1>
        <div class="patient-details-container">
            <div class="patient-info">

            <?php
foreach ($users as $user) {
    ?>

  <p><strong>Prénom :</strong><?= $user["lastname"] ?></p>
                <p><strong>Nom :</strong><?= $user["firstname"] ?></p>
                <p><strong>Date de naissance :</strong><?=$user["birthdate"] ?></p>
                <p><strong>Numéro de téléphone :</strong><?= $user["phone"] ?></p>
                <p><strong>Email :</strong><?= $user["mail"] ?></p>


            </div>
            <div class="patient-actions">
                <a href="./utils/liste-clients.php" class="btn">Retour à la Liste des Clients</a>
            </div>
        </div>
        <div class="edit-btn-container">
            <a href="./modifier-patient.php?lid=<?=$user["id"] ?>" class="btn edit-btn">Modifier les Informations</a>
        </div>
    </div>
<?php  }            
?>


</body>
</html>