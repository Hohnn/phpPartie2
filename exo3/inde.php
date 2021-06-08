<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo php partie 2</title>
</head>
<body>
    <p>Exo 3</p>
    <?php
    $age = 19;
    $gender = 'Femme';
    if ($age >= 18 && $gender == 'Homme') {
        echo 'Vous êtes un homme et vous êtes majeur';
    } elseif ($age >= 18 && $gender == 'Femme') {
        echo 'Vous êtes une femme et vous êtes majeur';
    } elseif ($age < 18 && $gender == 'Femme') {
        echo 'Vous êtes une femme et vous êtes mineur';
    } elseif ($age < 18 && $gender == 'Homme') {
        echo 'Vous êtes un homme et vous êtes mineur';
    } 
    ?>
</body>
</html>