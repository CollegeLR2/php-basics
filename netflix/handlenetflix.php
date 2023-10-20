<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="netflixstyle.css">
    <title>Welcome</title>
</head>
<body>

    <?php

    $name = $_POST["username"];
    $date = $_POST["billdate"];
    $tier = $_POST["tier"];
    $card = $_POST["cnumber"];

    if ($tier == "tier1") {
        $cost = 5.99;
    } elseif ($tier == "tier2") {
        $cost = 9.99;
    } else {
        $cost = "error";
        echo "Something has gone wrong here...";
    }

    echo "<h1>Welcome, $name! You have successfully signed up to Netflix!</h1>";
    echo "<p>Your card ($card) will be charged £$cost every month. 
    The first payment is set to be taken on $date.";

    ?>

</body>
</html>
