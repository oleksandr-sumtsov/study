<?php
if (!empty($_SESSION['products_cart'])):
    $products = $_SESSION['products_cart'];
    $price = 0;
    ?>
    Товары в корзине
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <strong>Name:</strong>&nbsp;<i style="color:green"><?php echo $product->getName() ?></i>&nbsp;&nbsp;|&nbsp;&nbsp;
                <strong>Color:</strong>&nbsp;<i style="color:red"><?php echo $product->getColor() ?></i>&nbsp;&nbsp;|&nbsp;&nbsp;
                <strong>Price:</strong>&nbsp;<i style="color:blue"><?php echo $product->getPrice() ?>$</i>
            </li>
            <?php $price = $price + $product->getPrice() ?>
        <?php endforeach; ?>
    </ul>
    Общая цена: <?php echo $price; ?>
<?php else:?>
    Корзина пуста
<?php endif; ?>
