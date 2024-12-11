<?php

$lid = $_GET["lid"];

require_once "../utils/connect_db.php";

$sql = "UPDATE patients SET firstname = :firstName, lastname = :lastName, birthdate = :birthday, phone = :phoneNumber, mail = :email WHERE id like 8;";

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


header("Location: ../utils/liste-clients.php");

exit
?>
