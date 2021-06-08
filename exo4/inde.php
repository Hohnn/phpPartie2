<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo php partie 2</title>
</head>
<body>
    <p>Exo 4</p>
    <?php
    $magnitude = 5;
    switch ($magnitude) {
        case 1:
            echo "Micro-séisme impossible à ressentir";
            break;
        case 2:
            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres";
            break;
        case 3:
            echo "Ne cause pas de dégats mais commence à pouvoir êtres légèrement ressenti.";
            break;
        case 4:
            echo "Séisme caâble de faire bouger des objets mais ne causant généralement pas de dégats";
            break;
        case 5:
            echo "Séisme capable d'engendrer des importants dégats sur de vieux batiments";
            break;
        case 6:
            echo "Fort séisme capable d'engendrer des destructions";
            break;
        case 7:
            echo "Séisme capable de destruction majeurs";
            break;
        case 8:
            echo "Séisme capable destruction majeurs sur une très large zone";
            break;
        case 9:
            echo "Séisme capable de tout détruire sur une tès vaste zone";
            break;
    }
    ?>
</body>
</html>