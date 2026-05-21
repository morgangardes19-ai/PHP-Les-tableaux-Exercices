<?php
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
    <?php
    foreach ($departements as $property => $propertyValue) { ?>
        <p>
            <?= 'Le départemenet ' . $propertyValue . ' a le numéro ' . $property .  PHP_EOL; ?>
        </p>
    <?php }
    ?>
</body>

</html>