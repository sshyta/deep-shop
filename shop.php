<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Товары</title>
</head>
<body>
    <header>
        <div id="headerInside" class="nav">
            <div id="logo"><img src="/assets/img/Logo.svg" class="logo"></div>
            <div id="conpanyName" class="conpanyName"></div>
            <div id="navWrape" class="navWrape">
                <a href="/index.php" class="button">
                    Главная
                </a>
                <a href="/shop.php" class="button">
                    Магазин
                </a>
            </div>
        </div>
    </header>

    <h1>Каталог товаров</h1>

    <div class="shopUnitall">
        <?php
        // Assuming $products is an array containing product data
        $products = [
            [
                "image" => "/assets/img/aa.png",
                "name" => "Смартфон Apple iPhone 15 128 ГБ черный",
                "description" => "Смартфон Apple iPhone 15 привлекает внимание...",
                "price" => "1 253,98 $",
                "id" => 1
            ],
            [
                "image" => "/assets/img/dd.png",
                "name" => "Смартфон HUAWEI P60 256 ГБ черный",
                "description" => "Смартфон HUAWEI P60 256 ГБ оборудован изогнутым экраном...",
                "price" => "703,26 $",
                "id" => 2
            ]
        ];

        foreach ($products as $product) {
            echo '<div class="shopUnit">';
            echo '<img class="imgAll" src="' . $product["image"] . '" >';
            echo '<div class="shopUnitName">' . $product["name"] . '</div>';
            echo '<div class="shopUnitShortDesc">' . $product["description"] . '</div>';
            echo '<div class="shopUnitPrice">Цена: ' . $product["price"] . '</div>';
            echo '<a href="/Product.php?id=' . $product["id"] . '" class="shopUnitMore">Подробнее</a>';
            echo '</div>';
        }
        ?>
    </div>
    <footer><p>© 2023 Xwene</p></footer>
</body>
</html>
