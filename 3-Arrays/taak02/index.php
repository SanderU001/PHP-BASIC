<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $myCatNames =  ['tijger', 'mickey', 'tijger'];

        $myCatNames[1] = 'Hond';

        echo $myCatNames[0] . $myCatNames[1] . $myCatNames[2];
    ?>
</body>
</html>