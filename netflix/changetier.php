<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="netflixstyle.css">
    <title>Change Tier</title>
</head>
<body>
    <h2>Change your Payment Tier</h2>
    <form action="POST">
        <input type="text" name="username" placeholder="Username" required>
        <br />
        <input type="password" name="password" placeholder="Password" required>
        <br />
        <input type="radio" id="tier1" name="tier" value="tier1" required>
        <label for="tier1">Tier 1 subscription (£5.99 a month)</label>
        <br />
        <input type="radio" id="tier2" name="tier" value="tier2">
        <label for="tier2">Tier 2 subscription (£9.99 a month)</label>
        <br />
        <input type="submit">
    </form>
    <h3>Changes to your tier will take place after your next billing date. 
        You will be charged at your old rate for the current month.</h3>
</body>
</html>
