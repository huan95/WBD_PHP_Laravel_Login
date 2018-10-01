<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Log in</h1>
<form action="/login" method="POST">
    <p>@csrf</p>
    <p>
        <input type="text" name="username" placeholder="user name">
    </p>
    <p>
        <input type="password" name="password" placeholder="password">
    </p>
    <p>
        <button type="submit">Log in</button>
    </p>
</form>
</body>
</html>