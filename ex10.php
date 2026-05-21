<?php

/**
 * Tableau qui prend en compte tous les départements des Hauts de France.
 */
$departements = [
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '80' => 'Somme',
]
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Afficher toutes les valeurs de ce tableau ainsi que les clés associés -->
    <?php
    foreach ($departements as $property => $propertyValue) { ?>
        <p>
            <?= 'Le départemenet ' . $propertyValue . ' a le numéro ' . $property .  PHP_EOL; ?>
        </p>
    <?php }
    ?>


    <!-- Vérifier si la clé 02 est dans le tableau -->
    <?php
    if (array_key_exists('02', $departements))
        echo '02';
    ?>


    <!-- Afficher rapidement un tableau avec print_r -->
    <?php
    echo '<pre>';
    print_r($departements);
    echo '<pre>';
    ?>

    <!-- Affichage avec var_dump, une sorte de console.log de PHP -->
    <?php
    var_dump($departements);
    ?>
</body>

</html>