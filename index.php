<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $firstname = "Ondřej";
        $lastname = "Čábelka";
        $age = "15";
        $frofesion = "student";
        $city = "Rasochy";
        $avatar = "ondrej-cabelka.jpg";
    ?>
    <h1>Výpis profilu<h1>
    <img src="<?php echo $avatar; ?>" alt="Avatar uživatele">
    <ul>
        <li>Jméno: <?php echo $firstname; ?></li>
        <li>Příjmení: <?php echo $lastname; ?></li>
        <li>Věk: <?php echo $age; ?></li>
        <li>Frofese: <?php echo $frofesion; ?></li>
        <li>Bydliště: <?php echo $city; ?></li>
    </ul>
</body>
</html>