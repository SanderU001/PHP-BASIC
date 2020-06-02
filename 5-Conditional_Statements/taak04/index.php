<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $product = 9;
        $prijs1 = 1.20;
        $prijs2 = 1.99;
        $prijs3 = 2.50;

        if($product > 10) {
            echo $prijs1;
        }
        else if($product == 10) {
            echo $prijs2;
        }
        else {
            echo $prijs3;
        }



    ?>
</body>
</html>