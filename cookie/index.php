
<html>
<head>
    <title></title>
</head>
<body>
Это секретная страница. Не всем можно её видеть.<br>
<?php if (isset($_COOKIE['logged']) && $_COOKIE['logged'] == '1'): ?>
    Добрый день.  Доступ разрешён.
<?php else: ?>
    Доступ запрещён. <a href="login.html">Войдите</a> или <a href="register.html"> зарегистрируйтесь</a>.
<?php endif; ?>
</body>
</html>


