<?php

require_once "../utils/connect_db.php";

$sql = "INSERT INTO patients (lastname, firstname, birthdate, phone, mail) VALUES (:firstName, :lastName, :birthday, :phoneNumber, :email)";

try {
$stmt = $pdo->prepare($sql);
$users = $stmt->execute([
    ':firstName' => $_POST["firstName"],
    ':lastName' => $_POST["lastName"],
    ':birthday' => $_POST["birthday"],
    ':phoneNumber' => $_POST["phoneNumber"],
    ':email' => $_POST["email"],
]);


} catch (PDOException $error){
echo "Erreur lors de la requete " . $error->getMessage();

}

header("Location: ../utils/index.php");

exit
?>
