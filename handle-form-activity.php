<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
</head>
<body>
    <h1>Registration successful</h1>
    <p>Thank you for submitting the following information:</p>

    <?php
    $fname = $_POST["fname"];
    $sname = $_POST["sname"];
    $name = "$fname $sname";
    $pet = $_POST["pet"];
    $type = $_POST["type"];
    $housenumber = $_POST["number"];
    $street = $_POST["street"];
    $address = "$housenumber $street";
    $town = $_POST["town"];
    $county = $_POST["county"];
    $code = $_POST["code"];

    echo "Name = $name<br />
            Your pet is named $pet. They are a $type.<br />
            Your address is:<br />
            $address<br />
            $town<br />
            $county<br />
            $code<br />";

    echo "We will contact you shortly.";
    ?>

</body>
</html>
