<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
Тут комменты
<ul class="comments">

    <?php foreach ($comments as $comment) { ?>
        <li>
            <strong><?php echo $comment['name'] ?></strong>
            <i><?php echo $comment['email'] ?></i>
            <p><?php echo $comment['text'] ?></p>
        </li>
    <?php } ?>

</ul>
</body>
</html>