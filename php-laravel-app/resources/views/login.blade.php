<!DOCTYPE html>
<html>
<head>
    <title>Вход</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width: 400px;">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="mb-4">Вход</h4>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Пароль" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Войти</button>
            </form>

            <div class="mt-3 text-center">
                Нет аккаунта? <a href="/register">Создать</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
