<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 28/11/2018
 * Time: 11:39
 */
require  'autoload.php';
$personne = new Personne();
$personnes = $personne->findAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<ol class="list-group">
    <?php foreach ($personnes as $person) { ?>
            <li class="list-group-item">
                <?= $person->cin ?>
                <?= $person->name ?>
                <?= $person->firstname ?>
                <a href="treatement/delete.php?cin=<?= $person->cin ?> ">delete</a>
            </li>

        <?php
    }
    ?>
</ol>

</body>
</html>
