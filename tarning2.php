<?php
require_once 'ClassTarning.Dice.php';

$odd = array(1,3,5,6,7);
$even = array(2,4,6,8,10);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tärning</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="tarning2.css">
    </head>
    <body>

        <form method="POST" name="myForm">
            Ange antal sidor: <input type="input" name="sidor"><br>
            Ange antal kast: <input type="input" name="kast"><br>
            <input type="submit" value="Kasta Tärningarna" name="kasta" class="kasta">
        </form>
        
    </body>
</html>
