<?php 

include "library/db.php";

$conn = connect();

$query = "DELETE FROM pets WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();

header("Location: delete-pets.php?msg=delete-success");

?>
