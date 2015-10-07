<?php require_once 'classes/Product.php';?>
<?php session_start(); ?>
<?php require_once 'products.php'; ?>
<?php
    $colors = array(
        '' => 'Любой',
        'blue' => 'Blue',
        'red' => 'Red',
        'green' => 'Green',
    );
?>
<form action="switch_color.php">
    <select name="color">
        <?php foreach ($colors as $key=>$color): ?>
            <option value="<?php echo $key ?>" <?php if ($key == $_SESSION['color']): echo 'selected'; endif; ?>><?php echo $color ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Изменить цвет">
</form>
<div style="clear: both"></div>
<ul style="float: left">

<?php foreach ($products as $product): ?>
    <?php if (empty($_SESSION['color']) || !empty($_SESSION['color']) && $_SESSION['color'] == $product->getColor()): ?>
        <li>
            <strong>Name:</strong>&nbsp;<i style="color:green"><?php echo $product->getName() ?></i>&nbsp;&nbsp;|&nbsp;&nbsp;
            <strong>Color:</strong>&nbsp;<i style="color:red"><?php echo $product->getColor() ?></i>&nbsp;&nbsp;|&nbsp;&nbsp;
            <strong>Price:</strong>&nbsp;<i style="color:blue"><?php echo $product->getPrice() ?>$</i>
            <form action="add_to_cart.php" method="get">
                <input type="hidden" name="name" value="<?php echo $product->getName() ?>">
                <input type="hidden" name="color" value="<?php echo $product->getColor() ?>">
                <input type="hidden" name="price" value="<?php echo $product->getPrice() ?>">
                <input type="submit" value="Купить">
            </form>
        </li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>

<div id="cart" style="float: left; border: 1px solid black">
    <h2>Корзина</h2>
    <?php require_once 'cart.php' ?>
</div>

