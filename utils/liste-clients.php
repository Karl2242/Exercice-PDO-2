<?php



require_once "../utils/connect_db.php";
$sql = "SELECT * FROM patients;";

try {

    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

}   catch(PDOException $error) {
echo "Erreur lors de la requete " . $error->getMessage();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Clients</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/liste-client.css">
</head>
<body>
    <header>
        <h2>Rendez-vous Médical</h2>
        <nav>
            <a href="../acc.php">Accueil</a>
            <a href="./liste-clients.php">Liste des Clients</a>
            <a href="./index.php">Créer un compte</a>
        </nav>
    </header>

    <div class="main-container">
        <h1>Liste des Clients</h1>
        <div class="client-list-container">
            <ul class="client-list">
                <?php

foreach ($users as $user) {
    ?>

<li class="client-item"><?= $user["firstname"] ?> <?= $user["lastname"]?> <?= $user["phone"]?>
<a class="info-btn" href="../profil-patient.php?lid=<?= $user["id"]?>">Information</a>
</li>

    <?php
}
        ?>


            </ul>
        </div>
    </div>

</body>
</html>
