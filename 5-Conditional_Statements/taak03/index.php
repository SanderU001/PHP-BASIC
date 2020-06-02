<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $variabele1 = 3;
        $variabele2 = 6;
        
        if($variabele1 == $variabele2) {
            echo "de vergelijking is waar!";
        }

        else if($variabele1 > $variabele2) {
            echo "kleiner!";
        }

        else if ($variabele1 < $variabele2) {
            echo "groter";
        }

        else {
            echo "de vergelijking is niet waar!";
        }




    ?>
</body>
</html>