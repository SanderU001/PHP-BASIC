<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function zetTweeWoordenAanElkaar() {
        $woord1 = "Ballon";
        $zin1 = "vliegt omhoog";
        $heleZin = $woord1 . ' ' . $zin1;
        echo $heleZin;
    }

    echo zetTweeWoordenAanElkaar();
    



    ?>
</body>
</html>