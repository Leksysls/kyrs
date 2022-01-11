<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Add users</title>
</head>
<body>
    <form method="post" action="../views/adminpanel.php?action=add">
        <label>
            Логин
            <input type="text" name="login">
        </label>
        <label>
            Пороль
            <input type="password" name="password">
        </label>
        <label>
            Роль
            <input type="text" name="role_id">
        </label>
        <input type="submit" value="Сохранить">
    </form>
</body>
</html>