<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создать бронирование</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- Подключаем CSS и JS через Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        header {
            position: relative;
            height: 100vh;
            background-color: #111;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            transform: translateY(-8.8vh) translateX(-10.8vh);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 5vh 2vw;
            max-width: 350px;
            height: 450px;
            translate: 800px 150px;
            backdrop-filter: blur(10px);
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.67);
        }
        h2 {
            position: absolute;
            translate: 30px -50px;
            user-select: none;
            font-size: 1.5rem;
            word-spacing: 10px;
            letter-spacing: 3px;
        }
        h3 {
            position: absolute;
            user-select: none;
            color: #5cb508;
            letter-spacing: 4px;
            font-size: 25px;
            font-family: sans-serif;
            border-radius: 10px;
            transition: 1s;
        }
        .box input {
            width: 100%;
            max-width: 220px;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background-color: rgba(33, 37, 36, 0.47);
            color: #fdfdfd;
            font-size: 1rem;
            transition: 0.3s;
            transform: translateY(0.8vh) translateX(3.8vh);
        }
        .box label {
            align-self: flex-start;
            margin-bottom: 0.5rem;
            color: #121212;
            font-size: 1rem;
            transform: translateY(5vh) translateX(-1vh);
        }
        .bron {
            position: absolute;
            width: 180px;
            height: 50px;
            transform: translateY(45vh) translateX(3.8vh);
            border-radius: 10px;
            background: linear-gradient(to right, #0f37bb, #e2e2e2);
            border: 1px solid black;
            cursor: pointer;
            font-size: 15px;
            letter-spacing: 1px;
            transition: 1s;
        }
        .bron:hover {
            background: linear-gradient(to right, #e2e2e2, #0f37b5);
        }
        .alert {
            color: red;
            text-align: center;
        }

        .poqr {
            position: fixed;
            top: 20px;
            right: -125px; /* Скрываем кнопки за пределами экрана */
            transition: right 1s ease, transform 0.5s ease; /* Плавная анимация для перемещения */
            display: flex;
            align-items: center;
        }

        .poqr.active {
            right: -80px; /* Показываем кнопки при активном классе */
            transform: translateX(-100px); /* Перемещаем влево на 100px */
        }

        .poqr i {
            font-size: 24px; /* Размер иконки */
            margin-right: 10px; /* Отступ между иконкой и кнопками */
            cursor: pointer; /* Курсор указателя для иконки */
        }
        .poqr.active .signin,
        .poqr.active .signup {
            display: block; /* Показываем кнопки при активном классе */
        }
        .toggle-button {
            cursor: pointer;
            color: #ef3232;
        }
        .signin{
            background-color: transparent;
            border: none;
            color: white;
            transition: .7s;
        }
        .signin:hover{
            color: #05ecf4;
        }
        .signup{
            transition: .7s;
            background-color: transparent;
            color: white;
            border: none;
        }
        .signup:hover{
            color: #05f418;
        }

        /* .boxsignin  h3{*/
        /*     position: fixed;*/
        /*     font-size: 20px;*/
        /*     color: #ff001e;*/
        /*     right: -18px;*/
        /*     top: 100px;*/
        /*     transition: 1s;*/
        /*     background-color: transparent;*/
        /*     font-weight: bold;*/
        /* }*/
        /*.active .boxsignin  h3{*/
        /*      translate: 0;*/
        /*      !*display: block;*!*/
        /*      transition: .7s;*/
        /*  }*/
        /*  .boxsignin h3{*/
        /*      transition: .7s;*/
        /*  }*/




        .boxsignin {
            position: absolute;
            right: -300px; /* Скрыта за экраном */
            top: 20%;
            width: 300px;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            transition: right 0.7s ease-in-out;
            display: flex;
            flex-direction: column;
        }

        .open .boxsignin {
            right: 15px; /* Показываем форму */
        }

        .boxsignin input {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }

        /*.signin {*/
        /*    background-color: #05ecf4;*/
        /*    border: none;*/
        /*    padding: 10px;*/
        /*    border-radius: 5px;*/
        /*    color: #111;*/
        /*    cursor: pointer;*/
        /*    transition: background-color 0.3s;*/
        /*}*/

        /*.signin:hover {*/
        /*    background-color: #05f418;*/
        /*}*/




    </style>
</head>

<body style="background: url('https://app.conciergetravel.am/storage/24/congress-1024x578.jpg') no-repeat center/cover fixed;">

<h3>Вы нашли жилье для нового отдыха</h3>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="poqr">
    <i class="fa-solid fa-user toggle-button"></i> <!-- Иконка пользователя -->
    <button type="submit" class="signin">Sign In</button>
    <button type="submit" class="signup">Sign Up</button>
</div>

<nav class="boxsignin">
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
{{--        {{ route('login') }}--}}
    <h3>Sign In</h3>
    <form action="" method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="email" maxlength="30" value="{{ old('email') }}">
        @error('email') <div class="errorna">{{ $message }}</div> @enderror

        <label for="password">Password</label>
        <input type="password" name="password" id="password" maxlength="30">
        <button type="submit" class="buttonsignin">Sign In</button>
    </form>
</nav>




{{--<nav class="boxsignup">--}}
{{--    <h2>Register</h2>--}}
{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <form action="{{ route('register') }}" method="POST">--}}
{{--        @csrf--}}
{{--        <div>--}}
{{--            <label for="name">Name:</label>--}}
{{--            <input type="text" name="name" id="name" required>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <label for="email">Email:</label>--}}
{{--            <input type="email" name="email" id="email" required>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <label for="password">Password:</label>--}}
{{--            <input type="password" name="password" id="password" required>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <label for="password_confirmation">Confirm Password:</label>--}}
{{--            <input type="password" name="password_confirmation" id="password_confirmation" required>--}}
{{--        </div>--}}
{{--        <button type="submit">Register</button>--}}
{{--    </form>--}}
{{--</nav>--}}




<a href="{{ route('bookings.index') }}">Посмотреть все бронирования</a>

<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <div class="box">
        <h2>FIND ROOM</h2>

        <label for="anun">Имя</label>
        <input type="text" name="anun" id="anun" value="{{ old('anun') }}" required>

        <label for="azganun">Фамилия</label>
        <input type="text" name="azganun" id="azganun" value="{{ old('azganun') }}" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>

        <label for="age">Возраст</label>
        <input type="number" name="age" id="age" maxlength="3" value="{{ old('age') }}" required>

        <label for="phone">Телефон</label>
        <input type="text" name="phone" id="phone" maxlength="12" value="{{ old('phone') }}" required pattern="\+?[0-9]{10,12}">

        <button type="submit" class="bron">Бронировать</button>
    </div>
</form>

<script>
    const toggleButton = document.querySelector('.toggle-button'); // Теперь выбираем иконку
    const poqr = document.querySelector('.poqr');

    toggleButton.addEventListener('click', () => {
        poqr.classList.toggle('active'); // Переключаем класс active для показа/скрытия
    });



    const signin = document.querySelector('.signin'); // Кнопка для переключения
    const body = document.body; // Получаем элемент body

    signin.addEventListener('click', () => {
        body.classList.toggle('open'); // Переключаем класс для показа/скрытия формы
    });
</script>

</body>
</html>
