<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bla = ["ett", "två", "tre", "fyra", "fem", "sex", "sju", "åtta", "nio", "tio"];
    $blu = count($bla);
    for($x=0; $x<$blu; $x++){
        echo "rad ", $bla[$x], "<br>";
    }
    ?>
</body>
</html> <!--$x=1; $x<11; $x++-->