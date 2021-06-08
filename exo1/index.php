<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo php partie 2</title>
</head>
<body>
    <p>Exo 1</p>
    <?php
    $age = 18;
    if ($age >= 18) {
        echo 'vous êtes majeur';
    } else {
        echo 'vous êtes mineur';
    }
    ?>
</body>
</html>