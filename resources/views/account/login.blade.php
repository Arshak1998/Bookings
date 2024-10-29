<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Простейшие стили для модального окна */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .close-btn {
            float: right;
            cursor: pointer;
        }

        .login-register-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<!-- Кнопка открытия модального окна -->
<button class="login-register-btn" onclick="openModal()">Войти / Регистрация</button>

<!-- Модальное окно -->
<div id="authModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <h2>Вход</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Пароль" required><br><br>
            <button type="submit">Войти</button>
        </form>

        <hr>

        <h2>Регистрация</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Имя" required><br><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Пароль" required><br><br>
            <input type="password" name="password_confirmation" placeholder="Подтвердите пароль" required><br><br>
            <button type="submit">Регистрация</button>
        </form>
    </div>
</div>

<script>
    // Открытие модального окна
    function openModal() {
        document.getElementById('authModal').style.display = 'flex';
    }

    // Закрытие модального окна
    function closeModal() {
        document.getElementById('authModal').style.display = 'none';
    }

    // Закрытие модального окна при клике вне его области
    window.onclick = function(event) {
        const modal = document.getElementById('authModal');
        if (event.target === modal) {
            closeModal();
        }
    }
</script>

</body>
</html>








use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
