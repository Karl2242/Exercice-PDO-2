

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/acceuile.css">

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

<div class="containers">
    <div>
   <h1>Ajout d'un formulaire</h1>
    </div>
    <form action="../process/process_create_user.php" method="post" class="flex">
    <input type="text" placeholder="Votre prènom" name="firstName">
    <input type="text" placeholder="Votre nom" name="lastName">
<input type="date" placeholder="Dâte de naissance" name="birthday">
<input type="text" placeholder="Numero de telephone" name="phoneNumber">
<input type="text" placeholder="Email" name="email">
<input type="submit" value="Creer utilisateur">
</form>
    </div>

    
</body>
</html>