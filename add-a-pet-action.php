<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding pets</title>
</head>
<body>
    <?php

    include "library/db.php";

    $conn = connect();
    
    $query = "INSERT INTO pets (name, age, type) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $_POST["name"], $_POST["age"], $_POST["type"]);
    $stmt->execute();

    echo "<p>Successfully added " . $_POST["name"] . " to database</p>";

    ?>
</body>
</html>
