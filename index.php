<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $r = rand(0,255);
        $g = rand(0,255);
        $b = rand(0,255);
        $nome = "Gianburrasca";
        echo "<h1 style='color:rgb($r,$g,$b)'>$nome</h1>"
    ?>
</body>
</html>