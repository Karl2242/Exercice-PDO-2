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
    <title>Modifier les Informations du Patient</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/modif.css">
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
        <h1>Modifier les Informations du Patient</h1>
        <div class="form-container">
            <form action="./process/modif-process.php" method="post" class="patient-form">

            <?php
foreach ($users as $user) {
    ?>

<label for="firstName">Prénom :</label>
                <input type="text" id="firstName" name="firstName" value="<?= $user["lastname"] ?>">

                <label for="lastName">Nom :</label>
                <input type="text" id="lastName" name="lastName" value="<?= $user["firstname"] ?>">

                <label for="birthday">Date de Naissance :</label>
                <input type="date" id="birthday" name="birthday" value="<?= $user["birthdate"] ?>">

                <label for="phoneNumber">Numéro de Téléphone :</label>
                <input type="text" id="phoneNumber" name="phoneNumber" value="<?= $user["phone"] ?>">

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" value="<?= $user["mail"] ?>">

    <?php
}
?>
                <div class="form-actions">
                    <input type="submit" value="Enregistrer les Modifications" class="btn">
                    <a href="./profil-patient.php?lid=<?= $lid ?>" class="btn cancel-btn">Annuler</a>
                </div>
            </form>

        </div>
    </div>
</body>
</html>
