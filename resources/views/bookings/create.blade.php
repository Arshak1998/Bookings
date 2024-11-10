<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создать бронирование</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
            background-color: rgba(128, 239, 255, 0.66);
        }
        h2 {
            position: absolute;
            translate: 30px -50px;
            user-select: none;
            word-spacing: 10px;
            letter-spacing: 3px;
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
            right: -168px;
            transition: right 1s ease, transform 0.5s ease;
            display: flex;
            align-items: center;
        }

        .poqr.active {
            right: -90px;
            transform: translateX(-100px);
        }

        .poqr i {
            font-size: 28px;
            margin-right: 10px;
            cursor: pointer;
        }
        .poqr.active .signin,
        .poqr.active .signup {
            display: block;
        }
        .toggle-button {
            cursor: pointer;
            color: rgba(15, 80, 246, 0.93);
        }
        .signin{
            background-color: transparent;
            border: none;
            color: white;
            transition: .7s;
        }
        .signin:hover{
            color: rgba(15, 80, 246, 0.93);
        }
        .signup{
            transition: .7s;
            background-color: transparent;
            color: white;
            border: none;
        }
        .signup:hover{
            color: rgba(15, 80, 246, 0.93);
        }


        /*----------------sign in about---------------------------*/
        h3{
            position: fixed;
            transition: 1s;
            right: -90px;
            top: 8%;
            user-select: none;
        }
        .open h3{
            right: 35px;
        }

        .labelemail{
            position: fixed;
            transition: 2s;
            color: #000000;
            font-size: 1rem;
            right: -200px;
            font-weight: bold;
            top: 12%;
        }
        .open .labelemail{
            right: 35px;
        }

        .inputemail{
            margin: 0;
            border-radius: 5px;
            padding: 2px;
            transition: 1.3s;
            border: 1px solid #2b2a2a;
            background-color: rgba(214, 214, 214, 0.44);
            position: fixed;
            right: -270px;
            top: 16%;
        }
        .open .inputemail{
            right: 30px;
        }
        .labelpassword{
            position: fixed;
            transition: 2s;
            right: -200px;
            color: #000000;
            font-size: 1rem;
            top: 22%;
            font-weight: bold;
        }
        .open .labelpassword{
            right: 35px;
        }

        .inputpassword{
            margin: 0;
            padding: 2px;
            border-radius: 5px;
            transition: 1.3s;
            border: 1px solid #2b2a2a;
            background-color: rgba(214, 214, 214, 0.44);
            position: fixed;
            right: -270px;
            top: 26%;
        }
        .open .inputpassword{
            right: 30px;
        }

        .buttonsignin{
            border-radius: 5px;
            transition: background-color 1.2s, right 1.9s;
            padding: 4px;
            border: 1px solid #3c3a3a;
            position: fixed;
            right: -200px;
            color: #1446c6;
            top: 30%;
            margin: 14px -14px;
            width: 90px;
        }
        .buttonsignin:hover{
            color: white;
            background-color: #1446c6;
        }
        .open .buttonsignin{
            right: 45px;
        }
        /*----------------sign in----------------------*/
        /*----------------sign up about----------------------*/
        h6{
            position: fixed;
            transition: 1s;
            right: -120px;
            top: 8%;
            user-select: none;
        }
        .chopen h6{
            right: 35px;
        }
        .reslabelname{
            position: fixed;
            transition: 1.4s;
            color: #000000;
            font-size: 1rem;
            right: -4000px;
            font-weight: bold;
            top: 12%;
        }
        .chopen .reslabelname{
            right: 35px;
        }
        .resinputname{
            margin: 0;
            border-radius: 5px;
            padding: 2px;
            transition: 1.3s;
            border: 1px solid #2b2a2a;
            background-color: rgba(214, 214, 214, 0.44);
            position: fixed;
            right: -270px;
            top: 16%;
        }
        .chopen .resinputname{
            right: 30px;
        }
        .reslabellastname{
            position: fixed;
            transition: 1.6s;
            color: #000000;
            font-size: 1rem;
            right: -4000px;
            font-weight: bold;
            top: 20%;
        }
        .chopen .reslabellastname{
            right: 35px;
        }
        .resinputlastname{
            margin: 0;
            border-radius: 5px;
            padding: 2px;
            transition: 1.3s;
            border: 1px solid #2b2a2a;
            background-color: rgba(214, 214, 214, 0.44);
            position: fixed;
            right: -270px;
            top: 24%;
        }
        .chopen .resinputlastname{
            right: 30px;
        }
        .reslabelemail{
            position: fixed;
            transition: 1.8s;
            color: #000000;
            font-size: 1rem;
            right: -4000px;
            top: 28%;
            font-weight: bold;
        }
        .chopen .reslabelemail{
            right: 35px;
        }
        .resinputemail{
            margin: 0;
            padding: 2px;
            border-radius: 5px;
            transition: 1.3s;
            border: 1px solid #2b2a2a;
            background-color: rgba(214, 214, 214, 0.44);
            position: fixed;
            right: -270px;
            top: 32%;
        }
        .chopen .resinputemail{
            right: 30px;

        }
        .reslabelpass{
            position: fixed;
            transition: 2s;
            color: #000000;
            font-size: 1rem;
            right: -4000px;
            top: 36%;
            margin: 0;
            font-weight: bold;
        }
        .chopen .reslabelpass{
            right: 35px;
        }
        .resinputpass{
            margin: 0;
            padding: 2px;
            border-radius: 5px;
            transition: 1.3s;
            border: 1px solid #2b2a2a;
            background-color: rgba(214, 214, 214, 0.44);
            position: fixed;
            right: -270px;
            top: 40%;
        }
        .chopen .resinputpass{
            right: 30px;
        }
        .reslabelconfpass{
            position: fixed;
            transition: 2.2s;
            color: #000000;
            font-size: 1rem;
            right: -4000px;
            top: 44%;
            margin: 0;
            font-weight: bold;
        }
        .chopen  .reslabelconfpass{
            right: 35px;
        }
        .resinputconfpass{
            margin: 0;
            padding: 2px;
            border-radius: 5px;
            transition: 1.3s;
            border: 1px solid #2b2a2a;
            background-color: rgba(214, 214, 214, 0.44);
            position: fixed;
            right: -270px;
            top: 48%;
        }
        .chopen .resinputconfpass{
            right: 30px;
        }
        .buttonsignup{
            border-radius: 5px;
            transition: background-color 1.2s, right 1.9s;
            border: 1px solid #3c3a3a;
            position: fixed;
            right: -200px;
            width: 140px;
            height: 40px;
            color: #1446c6;
            top: 52%;
            margin: 14px -14px;
        }
        .buttonsignup:hover{
            color: white;
            background-color: #1446c6;
        }
        .chopen .buttonsignup{
            right: 45px;
        }
        /*---------------- sign up ----------------------*/


    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="background: url('https://png.pngtree.com/thumb_back/fw800/background/20231008/pngtree-explore-the-world-online-booking-of-airline-tickets-with-search-bar-image_13571648.png') no-repeat center/cover fixed;">


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
    <i class="fa-solid fa-user toggle-button"></i>
    <button type="submit" class="signin">Вход</button>
    <span style="display: inline-block; margin: 0 5px; color: #4c4a4a; user-select: none;">/</span>
    <button type="submit" class="signup">Регистрация</button>
</div>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
{{--        {{ route('login') }}--}}

    <h3 style="color: #d5d5d5; font-size: 19px; ">Войти</h3>
    <form action="" method="post">
        @csrf
        <label for="email" class="labelemail">Укажите свой email</label>
        <input type="email" class="inputemail" name="email" id="email" maxlength="30" value="{{ old('email') }}">
        @error('email') <div class="errorna">{{ $message }}</div> @enderror

        <label for="password" class="labelpassword">Пароль</label>
        <input type="password" class="inputpassword" name="password" id="password" maxlength="30">
        <button type="submit" class="buttonsignin">Вход</button>
    </form>




    <h6 style="color: #d5d5d5; font-size: 19px; ">Регистрация</h6>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
{{--{{ route('register') }}--}}
    <form action="" method="POST">
        @csrf
        <div>
            <label for="name" class="reslabelname">Имя</label>
            <input type="text" name="name" id="name" class="resinputname" required>
        </div>
        <div>
            <label for="lastname" class="reslabellastname">Фамилия</label>
            <input type="text" name="name" id="name" class="resinputlastname" required>
        </div>
        <div>
            <label for="email" class="reslabelemail">Электронная почта</label>
            <input type="email" class="resinputemail" name="email" id="email" required>
        </div>
        <div>
            <label for="password" class="reslabelpass">Придумайте пароль</label>
            <input type="password" class="resinputpass" name="password" id="password" required>
        </div>
        <div>
            <label for="password_confirmation" class="reslabelconfpass">Подтвердите пароль</label>
            <input type="password" class="resinputconfpass" name="password_confirmation" id="password_confirmation" required>
        </div>
        <button type="submit" class="buttonsignup">Создать аккаунт</button>
    </form>
        <div>
            <label for="email" class="reslabelemail">Электронная почта</label>
            <input type="email" class="resinputemail" name="email" id="email" required>
        </div>
        <div>
            <label for="password" class="reslabelpass">Придумайте пароль</label>
            <input type="password" class="resinputpass" name="password" id="password" required>
        </div>
        <div>
            <label for="password_confirmation" class="reslabelconfpass">Подтвердите пароль</label>
            <input type="password" class="resinputconfpass" name="password_confirmation" id="password_confirmation" required>
        </div>
        <button type="submit" class="buttonsignup">Создать аккаунт</button>
    </form>




<a href="{{ route('bookings.index') }}">Посмотреть все бронирования</a>

<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <div class="box">
        <h4>FIND ROOM</h4>

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

    const signin = document.querySelector('.signin');
    const signup = document.querySelector('.signup');
    const body = document.body;

    signin.addEventListener('click', () => {
        body.classList.toggle('open');
        if (body.classList.contains('open')) {
            body.classList.remove('chopen');
        }
    });

    signup.addEventListener('click', () => {
        body.classList.toggle('chopen');
        if (body.classList.contains('chopen')) {
            body.classList.remove('open');
        }
    });


    const toggleButton = document.querySelector('.toggle-button');
    const poqr = document.querySelector('.poqr');


    toggleButton.addEventListener('click', () => {
        poqr.classList.toggle('active');
        setTimeout(() => {
            poqr.classList.remove('active');
        }, 10000);
    });






































</script>

</body>
</html>
