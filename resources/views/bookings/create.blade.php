<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .box {
            transform: translateY(-8.8vh) translateX(-10.8vh);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 5vh 2vw;
            max-width: 350px;
            height:450px;
            translate:800px 150px;
            backdrop-filter: blur(10px);
            border-radius: 8px;
            background-color: rgba(223, 223, 223, 0.67);
        }
        h2{
            position: absolute;
            translate: 30px -50px;
            user-select: none;
            font-size:1.5rem;
            word-spacing: 10px;
            letter-spacing: 3px;
        }
        h3{
            position: absolute;
            user-select: none;
            color: #8fc604;
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
        .bron{
            position: absolute;
            width: 180px;
            height: 50px;
            transform: translateY(45vh) translateX(3.8vh);
            border-radius: 10px;
            background: linear-gradient(to right, #0f37b5, #e2e2e2);
            border: 1px solid black;
            cursor: pointer;
            font-size: 15px;
            letter-spacing: 1px;

        }
        .bron:hover{
            background: linear-gradient(to right, #e2e2e2,  #0f37b5 );
        }
        .success-message {
            color: green;
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body style="background: url('https://app.conciergetravel.am/storage/24/congress-1024x578.jpg') no-repeat center/cover fixed;">
@extends('layouts.app')

@section('title', 'Создать бронирование')

@section('content')









{{--    <form action="{{ route('register') }}" method="post">--}}
{{--        <button type="submit" >Sign Up</button>--}}
{{--    </form>--}}

{{--    <form action="{{ route('login') }}" method="post">--}}
{{--        <button type="submit">Sign In</button>--}}
{{--    </form>--}}




















    <h3>Вы нашли жилье для нового отдыха</h3>


{{--    @if (session('success'))--}}
{{--        <p style="color: green; text-align: center;">{{ session('success') }}</p>--}}
{{--    @endif--}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

    @if ($errors->any())
        <div class="alert" style="color: red; text-align: center;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{ route('bookings.index') }}"> ամրագրումների ցուցակ</a>

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

            <button type="submit" class="bron" style="   transition: 2s;">Бронировать</button>
        </div>
    </form>
@endsection
</body>
</html>
