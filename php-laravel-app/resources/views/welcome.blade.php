<!DOCTYPE html>
<html>
<head>
    <title>Регистрация и вход</title>
</head>
<body>
<h1>Регистрация</h1>
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/register" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Имя" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <input type="password" name="password_confirmation" placeholder="Подтвердите пароль" required><br>
    <button type="submit">Зарегистрироваться</button>
</form>

<h1>Вход</h1>
<form action="/login" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <button type="submit">Войти</button>
</form>
</body>
</html>
