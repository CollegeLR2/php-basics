<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Connection</title>
</head>
<body>
    <h1>Connecting to a database</h1>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    try {
        $conn = new mysqli($servername, $username, $password, "phpmyadmin");
        echo "Connected";
    }

    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: ". $conn->connect_error);
    // }

    catch(Exception $conn) {        
        header("Location: ./error.php");
    }
    
    ?>

</body>
</html>
