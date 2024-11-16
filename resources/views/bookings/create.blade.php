<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создать бронирование</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /*----------------------- BACK VIDEO -----------------------*/
        .background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        /*---------------------- BACK VIDEO END ----------------------*/
        /*------------------------- CLOCK ----------------------------*/

        .box{
            width: 300px;
            height: 80px;
            border-radius: 25px;
            color: white;
            position: fixed;
            z-index: 1000;
            translate: 12px;
        }
        .box .jam{
            width: 200px;
            height: 40px;
        }
        .box .shabat{
            width: 200px;
            height: 30px;
            text-align: center;
        }
        /*-----------------------  CLOCK END   ----------------------*/
        /*---------------------- KNOPKA MARDUK ----------------------*/
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
            color: rgba(179, 173, 173, 0.93);
            translate:  -10px;
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
        /*-------------------- KNOPKA MARDUK END----------------------*/
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
            color: #dfdddd;
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
            color: #dfdddd;
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
            color: #dfdddd;
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
            color: #dfdddd;
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
            color: #dfdddd;
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
            color: #dfdddd;
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
            color: #dfdddd;
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
        /*------------------- sign up --------------------------*/
        /*---------------- HEADER NAVIGATION ----------------------*/
    .headbig {
        height: 70px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        top: 0;
        z-index: 1;
    }
    .headbig .navig{
        height: 15%;
        width: 100%;
        display: flex;
        align-items: center;
        position: fixed;
        background-color: rgba(11, 7, 7, 0.61);
    }
    .navig .headul{
        display: flex;
        justify-content: space-around;
        width: 1000px;
        margin: auto;
        list-style: none;
    }
        .headul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .headul > li {
            margin-right: 20px;
            position: relative;
        }
        .headul > li a {
            text-decoration: none;
            color: #faf6f6;
            padding: 5px 10px;
            display: block;
        }
        .dropdown-menu {
            display: none;
            list-style: none;
            padding: 10px;
            background-color: #f9f9f9;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 10;
        }

        .dropdown-menu li {
            margin: 5px 0;
        }

        .dropdown-menu li a {
            color: #0877d3;
            padding: 5px 10px;
            font-size: 15px;
        }
        .dropdown-menu li a:hover {
            text-decoration: #090808 1px underline ;
        }

        .dropdown.open .dropdown-menu {
            display: block;
            margin: 9px 15px;
        }
        .dropdown-toggle::after {
            content: none;
        }
        .headul > li > a::after,
        .headul > li > a::before {
            content: none !important;
        }
        /*---------------- HEADER NAVIGATION ----------------------*/
        /*---------------- ASIDE NAVIGATION ----------------------*/
        .sidebar {
            color: #fff;
            position: fixed;
            height: 90%;
            width: 220px;
            top: 12%;
            overflow-y: auto;
        }
        .sidebar ul {
            list-style: none;
            padding: 20px 0;
            /*margin-top: 0;*/
            border-radius: 2px;
            background-color: rgba(11, 7, 7, 0.61);
        }
        .sidebar ul li {
            margin-bottom: 15px;
            transition: .5s;
        }
        .sidebar ul li:hover {
            background-color: rgba(21, 20, 20, 0.95);
            border-radius: 3px;
        }
        .sidebar ul li a {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .submenu {
            display: none;
            padding-left: 20px;
            list-style: none;
            margin-top: 10px;
            border-radius: 5px;
        }
        .submenu li {
            margin: 5px 0;
        }
        .submenu li a {
            color: #fff;
            padding: 8px 10px;
            font-size: 14px;
            text-decoration: none;
        }
        .has-submenu.open > .submenu {
            display: block;
        }
        .submenu {
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        .has-submenu.open > .submenu {
            opacity: 1;
            transform: translateY(0);
        }
        /*---------------- ASIDE NAVIGATION END ----------------------*/

    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<video autoplay muted loop class="background-video">
    <source src="{{ asset('video/aga.mp4') }}" type="video/mp4">
    Ваш браузер не поддерживает видео.
</video>


<div class="box">
    <div class="shabat"></div>
    <div class="jam">
        <h1><span class=" araj"></span> : <span class=" erku"></span> : <span class="ereq"></span></h1>
    </div>
</div>



<header class="headbig">
    <nav class="navig">
        <ul class="headul">
            <li><a href="#">Главная</a></li>
            {{--            {{ route('home') }}--}}
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Категории продуктов</a>
                <ul class="dropdown-menu">
                    <li><a href="#">по Языкам</a></li>
                    <li><a href="#">по Картинкам</a></li>
                    <li><a href="#">по Логи</a></li>
                </ul>
            </li>
{{--            {{ route('products.index') }}--}}
            <li><a href="#">Услуги </a></li>
{{--            {{ route('services.index') }}--}}
            <li><a href="#">Блог </a></li>
{{--            {{ route('blog.index') }}--}}
            <li><a href="#">О нас </a></li>
{{--            {{ route('about') }}--}}
            <li><a href="#">Контакты</a></li>
{{--            {{ route('contact') }}--}}
        </ul>
    </nav>
</header>










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




<aside class="sidebar">
    <ul>
        <li><a href="#">Новости</a></li>
        <li class="has-submenu">
            <a href="#">Кибер Мира</a>
            <ul class="submenu">
                <li><a href="#">Подкатегория 3.1</a></li>
                <li><a href="#">Подкатегория 3.2</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="#">Услуги</a>
        </li>
        <li class="menu-item">
            <a href="#">Блог</a>
        </li>
        <li class="menu-item">
            <a href="#">Хотите учиться?</a>
        </li>
        <li class="menu-item">
            <a href="#">Популярные категории</a>
        </li>
        <li class="has-submenu">
            <a href="#">Тематические категории</a>
            <ul class="submenu">
                <li><a href="#">Технологии</a></li>
                <li><a href="#">Искусство</a></li>
                <li><a href="#">Наука</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="#">Рекомендации</a>
        </li>
        <li class="menu-item">
            <a href="#">Акции и скидки</a>
        </li>
        <li class="menu-item">
            <a href="#">Отзывы по категориям</a>
        </li>
        <li class="menu-item">
            <a href="#">Новинки</a>
        </li>
    </ul>
</aside>

<script>
    /*--------------------- ACCOUNT ----------------------*/
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
    /*--------------------- ACCOUNT ----------------------*/
    /*---------------- HEADER NAVIGATION ----------------------*/
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        toggle.addEventListener('click', (event) => {
            event.preventDefault();
            dropdown.classList.toggle('open');
            if (dropdown.classList.contains('open')) {
                setTimeout(() => {
                    dropdown.classList.remove('open');
                }, 5000);
            }
        });
    });
    /*---------------- HEADER NAVIGATION ----------------------*/
    /*---------------- ASIDE NAVIGATION ----------------------*/
    const menuItems = document.querySelectorAll('.menu-item > a');

    menuItems.forEach(item => {
        item.addEventListener('click', (event) => {
            event.preventDefault();  // Предотвращаем переход по ссылке

            const parent = item.parentElement;  // Получаем родительский элемент li

            // Переключаем класс "open", который будет показывать подменю
            parent.classList.toggle('open');
        });
    });
    /*---------------- ASIDE NAVIGATION ----------------------*/
    /*------------------------  CLOCK  ----------------------*/
    const shabat = document.querySelector('.box .shabat')
    const arajin = document.querySelector('.box .jam .araj')
    const erku = document.querySelector('.box .jam .erku ')
    const ereq = document.querySelector('.box .jam .ereq ')

    setInterval(() =>{
        const op = new Date()
        op.getDay() == 1 ? shabat.innerText = 'Понедельник': op.getDay() == 2 ? shabat.innerText = 'Вторник': op.getDay() == 3 ? shabat.innerText = 'Среда': op.getDay() == 4 ? shabat.innerText = 'Четверг': op.getDay() == 5 ? shabat.innerText = 'Пятница': op.getDay() == 6 ? shabat.innerText = 'Суббота': op.getDay() == 7 ? shabat.innerText = 'Воскресенье': '';
        const jamm = op.getHours();
        const rope  = op.getMinutes();
        const vrk = op.getSeconds()
        arajin.innerText = jamm;
        erku.innerText = rope;
        ereq.innerText  = vrk
    },1000)
    console.log(erku);
    setInterval(() => {
        const data = new Date()
        let jam = data.getHours();
        let rope = data.getMinutes();
        let varkyan = data.getSeconds();
    })

    /*------------------------  CLOCK END ----------------------*/


</script>

</body>
</html>
