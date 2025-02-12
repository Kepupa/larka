<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width: 400px;">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="mb-4">Регистрация</h4>

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Имя" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Пароль" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Подтвердите пароль" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Зарегистрироваться</button>
            </form>

            <div class="mt-3 text-center">
                Уже есть аккаунт? <a href="/">Войти</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
