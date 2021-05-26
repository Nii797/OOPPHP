<?php require_once('data.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <title>Cafe OOP</title>
</head>
<body>
    <div class="menu-wrapper container">
        <h1 class="logo">Cafe OOP</h1>
        <form action="confirm.php" method="POST">
            <div class="menu-items">
                <?php foreach($menus as $menu): ?>
                <div class="menu-item">
                    <img src="<?php echo $menu->getImage() ?>" alt="Menu" class="menu-item-image">
                    <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
                    <p class="price"><?php echo $menu->getTaxIncludePrice() ?> (termasuk pajak)</p>
                    <span>Qty: </span>
                    <input type="text" value="0" name="<?php $menu->getName() ?>">
                </div>
                <?php endforeach ?>
            </div>
            <input type="submit" value="Pesan">
        </form>
    </div>
</body>
</html>