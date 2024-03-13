<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TI2 | Pays</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/validation.css">
</head>
<body>
    <h1>TI2 | Pays</h1>
    <table>
        <thead>
            <tr>
                <?php foreach(ORDERS as $order): ?>
                <?php 
                    $isOrder = $orderBY === $order;
                    $typeToEcho = $isOrder && $type === "ASC" ? "DESC" : "ASC"; 
                ?>
                <th <?php if($isOrder): ?>
                    aria-sort="<?= $typeToEcho === "DESC" ? "ascending" : "descending"?>"
                    <?php endif; ?>
                >
                    <a href="?order=<?= $order ?>&type=<?php echo $typeToEcho ?>"><?= ucfirst($order) ?></a>
                    <?php if($isOrder) : ?>
                        <img src="img/arrow-<?= $typeToEcho === "DESC" ? "up" : "down" ?>.svg">
                    <?php endif; ?>
                </th>
                <?php endforeach; ?>
                <th>Flags</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pays as $p) : ?>
                <tr>
                    <?php foreach(ORDERS as $order): ?>
                        <td><?= $p[$order] ?></td>
                    <?php endforeach; ?>
                    <td><img src="img/flags/<?= $p["url"] ?>" class="flag"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="js/validation.js"></script>
</body>
</html>
