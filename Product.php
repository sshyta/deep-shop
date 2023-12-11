<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Document</title>
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

    <?php
    // Simulating dynamic content retrieval based on product ID
    $productId = isset($_GET['id']) ? $_GET['id'] : 1; // Default to product ID 1
    $productInfo = getProductInfo($productId);

    // Function to retrieve product information based on product ID
    function getProductInfo($productId) {
        // You would typically fetch data from a database here
        $products = [
            1 => [
                "image" => "/assets/img/aa.png",
                "name" => "Смартфон Apple iPhone 15 128 ГБ черный",
                "description" => "Смартфон Apple iPhone 15 привлекает внимание безрамочным дисплеем 6.1”. Разрешение 2556x1179 dpi сохраняет четкость и насыщенность картинки, точную передачу цвета при любом освещении. 6-ядерный процессор Apple A16 Bionic с ОЗУ 6 ГБ гарантирует высокий уровень производительности. 2 тыловые камеры 48 +12 Мп позволяют делать эффектные фото и видео с углом обзора 120° и 4K-разрешением.",
                "price" => "1 253,98 $"
            ],
            2 => [
                "image" => "/assets/img/dd.png",
                "name" => "Смартфон HUAWEI P60 256 ГБ черный",
                "description" => "Смартфон HUAWEI P60 256 ГБ оборудован изогнутым экраном 6.67 дюйма на основе технологии OLED, который способен впечатлять четкостью воспроизведения картинки и натуральными оттенками. Стеклянный корпус защищен от воздействия влаги и пыли по стандарту IP68. Высокая производительность системы обеспечивается благодаря процессору Snapdragon 8+ Gen 1 и 8 ГБ оперативной памяти.",
                "price" => "703,26 $"
            ],
            // Add more products as needed
        ];

        return isset($products[$productId]) ? $products[$productId] : null;
    }
    ?>

    <div style="margin-bottom: 20px; float: left;" class="shopUnit">
        <div id="openedProduct-img"><img src="<?php echo $productInfo['image']; ?>"></div>
        <div id="openedProduct-content">
            <h1 id="openedProduct-name"><?php echo $productInfo['name']; ?></h1>
            <div id="openedProduct-desc"><?php echo $productInfo['description']; ?></div>
            <div id="openedProduct-price">Цена: <?php echo $productInfo['price']; ?></div>
        </div>
    </div>
    <footer><p>© 2023 Xwene</p></footer>
</body>
</html>
