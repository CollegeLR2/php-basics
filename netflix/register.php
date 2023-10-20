<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="netflixstyle.css">
    <title>Register</title>
    <script>
        jQuery( function() {
            jQuery( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+31D" });
  } );
    </script>
</head>
<body>
    <div class="container">
    <h1 class="second-background">Welcome to fake Netflix</h1>
    <br />
    <p class="second-background">Please fill out your details to register an account</p>

    <form action="handlenetflix.php" method="post">
        <input type="text" name="username" maxlength="40" placeholder="Create a Username" required />
        <br />
        <input type="password" name="password" maxlength="40" placeholder="Create a Password" required />
        <br />
        <input type="text" name="cnumber" maxlength="40" placeholder="Card number" required />
        <br />
        <input type="text" name="billdate" id="datepicker" placeholder="Preferred billing date" required>
        <br />
        <input type="radio" id="tier1" name="tier" value="tier1" required>
        <label for="tier1">Tier 1 subscription (£5.99 a month)</label>
        <br />
        <input type="radio" id="tier2" name="tier" value="tier2">
        <label for="tier2">Tier 2 subscription (£9.99 a month)</label>
        <br />
        <input type="submit" class="submit" text="Let's Go" />
    </form>
    </div>
</body>
</html>
