<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Проэкт</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="../images/iconlogo.png">
    <style>
        html, body {
            cursor: none;
            margin: 0;
            padding: 0;
            /*height: 200vh;*/
            height: 100%;
            display: flex;
            flex-direction: column;
            /*background-color:  rgb(30 64 64 / 62%);*/
            }

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
        /*-----------------------  CLOCK END   ----------------------*/
        /*---------------------- KNOPKA MARDUK ----------------------*/
        .poqr {
            position: fixed;
            top: 20px;
            right: -166px;
            transition: right 1s ease, transform 0.5s ease;
            display: flex;
            align-items: center;
            z-index: 2;
        }
        .poqr.active {
            right: -90px;
            transform: translateX(-100px);
        }

        .poqr i {
            font-size: 28px;
            margin-right: 10px;
        }
        .poqr.active .signin,
        .poqr.active .signup {
            display: block;
        }
        .toggle-button {
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
            z-index: 2;
            top: 8%;
            user-select: none;
        }
        .open h3{
            right: 35px;
        }
        .labelemail{
            z-index: 2;
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
            z-index: 2;
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
            z-index: 2;
            user-select: none;
        }
        .chopen h6{
            right: 35px;
        }
        .reslabelname{
            position: fixed;
            z-index: 2;
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
            z-index: 2;
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
        .headverev{
            width: 100%;
            background: rgb(113, 113, 143);
            height: 17px;
            top: 0;
            z-index: 3;
            position: fixed;
        }
    .headbig {
        height: 70px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        top: 0;
        z-index: 1;
    }
    .headbig .navig{
        height: 18%;
        width: 100%;
        top: 2%;
        display: flex;
        align-items: center;
        position: fixed;
        background-color: rgb(41, 41, 48);
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
            font-size: 20px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            padding: 5px 10px;
            display: block;
        }
        .headul > li a:hover {
            transform: translateY(3px);
            box-shadow: 0 23px 3px -19px rgba(34, 248, 255, 0.82);

            /*4px solid */
        }
        .headul > li > a::after,
        .headul > li > a::before {
            content: none !important;
        }
        /*---------------- HEADER NAVIGATION END ----------------------*/
        /*---------------- ASIDE NAVIGATION ----------------------*/
        .sidebar {
            color: #fff;
            position: fixed;
            height: 90%;
            width: 220px;
            top: 19.5%;
            left: 1.5%;
            overflow-y: auto;
        }
        .sidebar ul {
            list-style: none;
            border-radius: 2px;
            margin-top: 1.75%;
            background-color: rgba(11, 7, 7, 0.61);
            padding: 7px 2px;
        }
        .sidebar ul li {
            margin-bottom: 15px;
            transition: .5s;
        }
        .sidebar ul li:hover {
            background-color: rgba(21, 20, 20, 0.07);
            border-radius: 3px;
        }
        .sidebar ul li a {
            display: block;
            padding: 11px 15px;
            color: #fff;
            border-radius: 5px;
            font-size: 15px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            text-decoration: none;

        }
        .sidebar ul li a:hover {
            transform: translateX(3px);
            border-left: 4px solid rgba(34, 248, 255, 0.82);
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
        /*---------------- CURSOR  ----------------------*/
        #custom-cursor {
            position: fixed;
            width: 15px;
            height: 15px;
            background-color: rgba(255, 255, 255, 0.13);
            border-radius: 50%;
            pointer-events: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.99);
            transform: translate(-50%, -50%);
            border: 2px double white;
            z-index: 1000;
            transition: transform 0.1s ease;
        }
        /*---------------- CURSOR END ----------------------*/
        /*------------------ MAINFULL -----------------------*/
        .section-content{
            position: absolute;
            height: 1465px;
            width: 1180px;
            left: 6%;
            transform:translateX(150px) translateY(62px);
        }
        .mainone,
        .maintwo,
        .mainthree,
        .mainfour{
            position: absolute;
            width: 1180px;
            height: 366px;
        }
        .mainone{
            transform:translateY(-57px) translateX(-9px);
        }
        .maintwo{
            transform: translateY(260px) translateX(-9px);
        }
        .mainthree{
            transform: translateY(582px) translateX(-9px);
        }
        .mainfour{
            transform: translateY(904px) translateX(-9px);
        }
        .mainone a,
        .maintwo a,
        .mainthree a,
        .mainfour a{
            color: #fff;
            display: inline-block;
            position: relative;
        }
        .mainone a .kategoriprod1,
        .maintwo a .kategoriprod11,
        .mainthree a .kategoriprod111,
        .mainfour a .kategoriprod1111,
        .mainone a .kategoriprod2,
        .maintwo a .kategoriprod22,
        .mainthree a .kategoriprod222,
        .mainfour a .kategoriprod2222,
        .mainone a .kategoriprod3,
        .maintwo a .kategoriprod33,
        .mainthree a .kategoriprod333,
        .mainfour a .kategoriprod3333
        {
            width: 364px;
            height: 364px;
            transition: .5s;
        }
        .mainone a:hover .kategoriprod1,
        .maintwo a:hover .kategoriprod11,
        .mainthree a:hover .kategoriprod111,
        .mainfour a:hover .kategoriprod1111,
        .mainone a:hover .kategoriprod2,
        .maintwo a:hover .kategoriprod22,
        .mainthree a:hover .kategoriprod222,
        .mainfour a:hover .kategoriprod2222,
        .mainone a:hover .kategoriprod3,
        .maintwo a:hover .kategoriprod33,
        .mainthree a:hover .kategoriprod333,
        .mainfour a:hover .kategoriprod3333
        {
            rotate: -35deg;
            transform: skew(20deg);
        }
        .mainone a .kategoriprod1 span,
        .maintwo a .kategoriprod11 span,
        .mainthree a .kategoriprod111 span,
        .mainfour a .kategoriprod1111 span,
        .mainone a .kategoriprod2 span,
        .maintwo a .kategoriprod22 span,
        .mainthree a .kategoriprod222 span,
        .mainfour a .kategoriprod2222 span,
        .mainone a .kategoriprod3 span,
        .maintwo a .kategoriprod33 span,
        .mainthree a .kategoriprod333 span,
        .mainfour a .kategoriprod3333 span
        {
            position: absolute;
            top: 18%;
            left: 22%;;
            width: 200px;
            height: 200px;
            border: 5px double floralwhite;
            color: #006ba5;
            border-radius: 5%;
            transition: .5s;
            font-size: 5rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .mainone a:hover .kategoriprod1 span:first-child,
        .maintwo a:hover .kategoriprod11 span:first-child,
        .mainthree a:hover .kategoriprod111 span:first-child,
        .mainfour a:hover .kategoriprod1111 span:first-child,
        .mainone a:hover .kategoriprod2 span:first-child,
        .maintwo a:hover .kategoriprod22 span:first-child,
        .mainthree a:hover .kategoriprod222 span:first-child,
        .mainfour a:hover .kategoriprod2222 span:first-child,
        .mainone a:hover .kategoriprod3 span:first-child,
        .maintwo a:hover .kategoriprod33 span:first-child,
        .mainthree a:hover .kategoriprod333 span:first-child,
        .mainfour a:hover .kategoriprod3333 span:first-child
        {
            opacity: 0.8;
            transform:  translate(-15px, 15px);
        }
        .mainone a:hover .kategoriprod1 span:nth-child(2),
        .maintwo a:hover .kategoriprod11 span:nth-child(2),
        .mainthree a:hover .kategoriprod111 span:nth-child(2),
        .mainfour a:hover .kategoriprod1111 span:nth-child(2),
        .mainone a:hover .kategoriprod2 span:nth-child(2),
        .maimaintwonone a:hover .kategoriprod22 span:nth-child(2),
        .mainthree a:hover .kategoriprod222 span:nth-child(2),
        .mainfour a:hover .kategoriprod2222 span:nth-child(2),
        .mainone a:hover .kategoriprod3 span:nth-child(2),
        .maimaintwonone a:hover .kategoriprod33 span:nth-child(2),
        .mainthree a:hover .kategoriprod333 span:nth-child(2),
        .mainfour a:hover .kategoriprod3333 span:nth-child(2)
        {
            border-radius: 5%;
            border: 5px double floralwhite;
            opacity: 0.7;
            transform:  translate(-15px, 15px);
        }
        .mainone a:hover .kategoriprod1 span:nth-child(3),
        .maintwo a:hover .kategoriprod11 span:nth-child(3),
        .mainthree a:hover .kategoriprod111 span:nth-child(3),
        .mainfour a:hover .kategoriprod1111 span:nth-child(3),
        .mainone a:hover .kategoriprod2 span:nth-child(3),
        .maintwo a:hover .kategoriprod22 span:nth-child(3),
        .mainthree a:hover .kategoriprod222 span:nth-child(3),
        .mainfour a:hover .kategoriprod2222 span:nth-child(3),
        .mainone a:hover .kategoriprod3 span:nth-child(3),
        .maintwo a:hover .kategoriprod33 span:nth-child(3),
        .mainthree a:hover .kategoriprod333 span:nth-child(3),
        .mainfour a:hover .kategoriprod3333 span:nth-child(3)
        {
            border-radius: 5%;
            border: 5px double floralwhite;
            opacity: 0.6;
            transform:  translate(-30px, 30px);
        }
        .mainone a:hover .kategoriprod1 span:nth-child(4),
        .maintwo a:hover .kategoriprod11 span:nth-child(4),
        .mainthree a:hover .kategoriprod111 span:nth-child(4),
        .mainfour a:hover .kategoriprod1111 span:nth-child(4),
        .mainone a:hover .kategoriprod2 span:nth-child(4),
        .maintwo a:hover .kategoriprod22 span:nth-child(4),
        .mainthree a:hover .kategoriprod222 span:nth-child(4),
        .mainfour a:hover .kategoriprod2222 span:nth-child(4),
        .mainone a:hover .kategoriprod3 span:nth-child(4),
        .maintwo a:hover .kategoriprod33 span:nth-child(4),
        .mainthree a:hover .kategoriprod333 span:nth-child(4),
        .mainfour a:hover .kategoriprod3333 span:nth-child(4)
        {
            border-radius: 5%;
            border: 5px double floralwhite;
            opacity: 0.5;
            transform:  translate(-50px, 50px);
        }
        .mainone a:hover .kategoriprod1 span:nth-child(5),
        .maintwo a:hover .kategoriprod11 span:nth-child(5),
        .mainthree a:hover .kategoriprod111 span:nth-child(5),
        .mainfour a:hover .kategoriprod1111 span:nth-child(5),
        .mainone a:hover .kategoriprod2 span:nth-child(5),
        .maintwo a:hover .kategoriprod22 span:nth-child(5),
        .mainthree a:hover .kategoriprod222 span:nth-child(5),
        .mainfour a:hover .kategoriprod2222 span:nth-child(5),
        .mainone a:hover .kategoriprod3 span:nth-child(5),
        .maintwo a:hover .kategoriprod33 span:nth-child(5),
        .mainthree a:hover .kategoriprod333 span:nth-child(5),
        .mainfour a:hover .kategoriprod3333 span:nth-child(5)
        {
            border-radius: 5%;
            border: 5px double floralwhite;
            opacity: 0.4;
            transform:  translate(-80px, 80px);
        }
        .mainone a:hover .kategoriprod1 span:nth-child(6),
        .maintwo a:hover .kategoriprod11 span:nth-child(6),
        .mainthree a:hover .kategoriprod111 span:nth-child(6),
        .mainfour a:hover .kategoriprod1111 span:nth-child(6),
        .mainone a:hover .kategoriprod2 span:nth-child(6),
        .maintwo a:hover .kategoriprod22 span:nth-child(6),
        .mainthree a:hover .kategoriprod222 span:nth-child(6),
        .mainfour a:hover .kategoriprod2222 span:nth-child(6),
        .mainone a:hover .kategoriprod3 span:nth-child(6),
        .maintwo a:hover .kategoriprod33 span:nth-child(6),
        .mainthree a:hover .kategoriprod333 span:nth-child(6),
        .mainfour a:hover .kategoriprod3333 span:nth-child(6)
        {
            border-radius: 5%;
            border: 5px double floralwhite;
            opacity: 0.2;
            transform:  translate(-110px, 110px);
        }
        .mainone .kategoriprod1 span,
        .mainone .kategoriprod2 span,
        .mainone .kategoriprod3 span,
        .maintwo .kategoriprod11 span,
        .maintwo .kategoriprod22 span,
        .maintwo .kategoriprod33 span,
        .mainthree .kategoriprod111 span,
        .mainthree .kategoriprod222 span,
        .mainthree .kategoriprod333 span,
        .mainfour .kategoriprod1111 span,
        .mainfour .kategoriprod2222 span,
        .mainfour .kategoriprod3333 span
        {
            background-color: #333365;
        }
        /*------------------- MAINFULL END ----------------------*/
        /*-------------------- MAIN HIDDEN -------------------------*/
        .hidden {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease, opacity 0.5s ease;
            opacity: 0;
        }

        .visible {
            max-height: 100vh;
            opacity: 1;
            transition: max-height 0.5s ease, opacity 0.5s ease;
        }

        .section-content {
            margin-top: 100px;
            padding: 20px;
            background: rgba(43, 40, 40, 0.02);
        }
        /*-------------------- MAIN HIDDEN END ----------------------*/
        /*---------------------- SCROLLBAR ------------------------*/
        ::-webkit-scrollbar {
            width: 5px;
            height: 3px;
        }
        html {
            overflow: scroll;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, rgba(0, 0, 0, 0), #000000);
            border-radius: 10px;
        }
        /*--------------------- SCROLLBAR END ----------------------*/
        /*---------------------- FOOTER ------------------------*/
        footer {
            height: 150px;
            background-color: rgba(11, 7, 7, 0.73);
            bottom: 0;
            position: fixed;
            width: 100%;
        }
        .footpod{
            position: absolute;
            width: 45px;
            height: 45px;
            top: 10%;
            right: 10%;
            border: 2px solid rgba(117, 114, 114, 0.94);
            border-radius: 50%;
            translate: 80px 60px;
            background-color: rgba(35, 35, 35, 0.96);
            transition: 2s;
        }
        .footpod:hover {
            border: 2px solid rgba(34, 248, 255, 0.82);
        }
        .footpod i{
            font-size: 1.3rem;
            color: rgb(253, 253, 253);
            translate: 10px 9px;
        }
        .footpod a{
            width: 100px;
            height: 100px;
            margin: 20px 20px;
            position: absolute;
            z-index: 10;
            translate: -50px -32px ;
            opacity: 0;
            transition: .9s calc(.4s * var(--i));
        }
        .footpod:hover a{
            position: absolute;
            opacity: 1 ;
            scale:1.5;
            pointer-events: auto;
            width: 20px;
            height: 20px;
            /*border: 1px solid red;*/
        }
        .footpod:hover .del1 {
            transform: translate(-41px, 21px);
        }

        .footpod:hover .del2 {
            transform: translate(-39px, -10px);
        }

        .footpod:hover .del3 {
            transform: translate(-27px, -34px);
        }

        .footpod:hover .del4 {
            transform: translate(1px, -42px);
        }
            /*--------------------- FOOTER END ----------------------*/
            /*--------------------- ABOUT US ----------------------*/
        .section-content.about {
            background-color: rgba(27, 30, 27, 0.02);
            font-family: 'Arial', sans-serif;
            padding: 40px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: 60px auto;
            transition: all 0.3s ease-in-out;
        }
        .section-content.about .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }
        .section-content.about h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #0b0808;
            text-align: center;
        }
        .section-content.about h2 {
            font-size: 1.8em;
            font-weight: bold;
            margin-top: 30px;
            margin-bottom: 15px;
            color: #170c0c;
            border-left: 4px solid rgba(34, 248, 255, 0.82);
            padding-left: 10px;
        }
        .section-content.about p {
            font-size: 1.1em;
            line-height: 1.8em;
            margin-bottom: 20px;
            color: rgba(12, 9, 9, 0.76);
        }
        .section-content.about ul {
            list-style: disc;
            padding-left: 40px;
            margin-bottom: 20px;
        }
        .section-content.about ul li {
            font-size: 1.1em;
            margin-bottom: 10px;
            color: #292626;
        }
        .section-content.about a {
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .section-content.about a:hover {
            text-decoration: underline;
        }
        .section-content.about p a {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 5px;
            background: #28a7d5;
            color: #fff;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .section-content.about p a:hover {
            transform: scale(1.05);
        }
            /*--------------------- ABOUT US END ----------------------*/
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="cursor: none; min-height: 100vh; background-color: rgba(30,30,64,0.62); margin: 0; position: relative;">

{{--/*----------------------- BACK VIDEO -----------------------*/--}}
{{--<video autoplay muted loop class="background-video">--}}
{{--    <source src="{{ asset('video/aga1.mp4') }}" type="video/mp4">--}}
{{--</video>--}}
{{--/*----------------------- BACK VIDEO END -----------------------*/--}}

{{--/*---------------- CURSOR  ----------------------*/--}}
<div id="custom-cursor"></div>
{{--/*---------------- CURSOR END ----------------------*/--}}

{{--/*------------------------- CLOCK ----------------------------*/--}}
<div class="box">
        <div id="date" style="font-size: 16px; text-align: center; translate: -27px 33px; user-select: none;"></div>
        <div id="time" style="letter-spacing: 1px; font-size: 34px; font-weight: bold; text-align: center; translate: -32px 34px; user-select: none;"></div>

</div>
{{--/*------------------------- CLOCK ----------------------------*/--}}
{{--/*---------------- HEADER NAVIGATION ----------------------*/--}}
<div class="headverev"></div>
<header class="headbig">
    <nav class="navig">
        <ul class="headul">
            <li class="nav-item home"><a href="#" class="dropdown-toggle" data-target="home">Главная</a></li>
            <li class="nav-item products dropdown"><a href="#" class="dropdown-toggle" data-target="products">Категории продуктов</a></li>
            <li class="nav-item services"><a href="#" class="dropdown-toggle" data-target="services">Услуги</a></li>
            <li class="nav-item blog"><a href="#" class="dropdown-toggle" data-target="blog">Блог</a></li>
            <li class="nav-item about dropdown"><a href="#" class="dropdown-toggle" data-target="about">О нас</a></li>
            <li class="nav-item contacts"><a href="#" class="dropdown-toggle" data-target="contacts">Контакты</a></li>
        </ul>
    </nav>

</header>
{{--/*---------------- HEADER NAVIGATION END----------------------*/--}}

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

{{----------------------------------------------------------------------------------------------------}}
{{----------------------------------------------------------------------------------------------------}}
{{----------------------------------------------------------------------------------------------------}}
{{----------------------------------------------------------------------------------------------------}}

{{--<div class="section-content home hidden">--}}
{{--    <h1>Главная</h1>--}}
{{--    <p>Контент для главной страницы.</p>--}}
{{--</div>--}}
{{--<div class="section-content products hidden">--}}
{{--    <h1>Категории продуктов</h1>--}}
{{--    <p>Контент для категории продуктов.</p>--}}
{{--</div>--}}
{{--<div class="section-content services hidden">--}}
{{--    <h1>Услуги</h1>--}}
{{--    <p>Контент для услуг.</p>--}}
{{--</div>--}}
{{--<div class="section-content blog hidden">--}}
{{--    <h1>Блог</h1>--}}
{{--    <p>Контент для блога.</p>--}}
{{--</div>--}}
{{--<div class="section-content about hidden">--}}
{{--    <h1>О нас</h1>--}}
{{--    <p>Контент для страницы "О нас".</p>--}}
{{--</div>--}}
{{--<div class="section-content contacts hidden">--}}
{{--    <h1>Контакты</h1>--}}
{{--    <p>Контент для страницы "Контакты".</p>--}}
{{--</div>--}}
{{----------------------------------------------------------------------------------------------------}}
{{----------------------------------------------------------------------------------------------------}}
{{----------------------------------------------------------------------------------------------------}}
{{----------------------------------------------------------------------------------------------------}}

<section class="section-content about hidden" id="aboutus">
    <div class="container">
        <h1>О нас</h1>
        <p>Мы предлагаем лучшие цифровые продукты на рынке. Наш магазин — это место,
            где можно легко приобрести игровые ключи, подписки и программное обеспечение.</p>

        <h2>История компании</h2>
        <p>С 2020 года мы помогаем геймерам и профессионалам получать доступ к лучшим цифровым продуктам.
            Все началось с идеи сделать покупку ключей максимально быстрой и простой.</p>

        <h2>Наши ценности</h2>
        <ul>
            <li>Гарантия качества и оригинальности.</li>
            <li>Прозрачные цены без скрытых наценок.</li>
            <li>Мгновенная доставка после оплаты.</li>
            <li>Поддержка клиентов 24/7.</li>
        </ul>

        <h2>Почему выбирают нас?</h2>
        <p>Мы предоставляем только официальные ключи и гарантируем их работу. Наша платформа защищена современными технологиями шифрования для безопасности ваших данных.</p>

        <h2>Свяжитесь с нами</h2>
        <p>Email: <a href="mailto:support@cybercodeshop.com">support@cybercodeshop.com</a></p>
        <p>Телефон: <a href="tel:+123456789">+374 (77) (96) 033 - 997</a></p>
    </div>
</section>

<main class="section-content products hidden" id="Product">
    <div class="mainone">
        <a href="https://www.youtube.com/">
            <div class="kategoriprod1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-solid fa-shop"></span>
            </div>
        </a>
        <a href="#">
            <div class="kategoriprod2">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-solid fa-shop"></span>
            </div>
        </a>
        <a href="#">
            <div class="kategoriprod3">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-solid fa-shop"></span>
            </div>
        </a>
    </div>
    <div class="maintwo">
        <a href="#">
            <div class="kategoriprod11">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-solid fa-shop"></span>
            </div>
        </a>
        <a href="#">
            <div class="kategoriprod22">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-solid fa-shop"></span>
            </div>
        </a>
        <a href="#">
            <div class="kategoriprod33">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-solid fa-shop"></span>
            </div>
        </a>
    </div>
    <div class="mainthree">
        <a href="#">
            <div class="kategoriprod111">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-solid fa-shop"></span>
            </div>
        </a>
        <a href="#">
            <div class="kategoriprod222">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-solid fa-shop"></span>
            </div>
        </a>
        <a href="#">
            <div class="kategoriprod333">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-solid fa-shop"></span>
            </div>
        </a>
    </div>
    <div class="mainfour">
        <a href="#">
            <div class="kategoriprod1111">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-solid fa-shop"></span>
            </div>
        </a>
        <a href="#">
            <div class="kategoriprod2222">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-solid fa-shop"></span>
            </div>
        </a>
        <a href="#">
            <div class="kategoriprod3333">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-solid fa-shop"></span>
            </div>
        </a>
    </div>
</main>
































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


 <footer>
     <div class="footpod">
         <i class="fa-regular fa-paper-plane"></i>
         <a class="del1" style="--i:0;" href="https://www.facebook.com/?locale=ru_RU"><i class="fa-brands fa-facebook"></i></a>
         <a class="del2" style="--i:1;" href="https://www.whatsapp.com/?lang=ru_RU"><i class="fa-brands fa-whatsapp"></i></a>
         <a class="del3" style="--i:2;" href="https://www.viber.com/ru/"><i class="fa-brands fa-viber"></i></a>
         <a class="del4"  style="--i:3;" href="https://web.telegram.org/a/"><i class="fa-brands fa-telegram"></i></a>
     </div>
 </footer>

<script>
    /*--------------------- ACCOUNT ----------------------*/
    const signin = document.querySelector('.signin');
    const signup = document.querySelector('.signup');
    const body = document.body;

    function toggleClass(addClass, removeClass) {
        body.classList.toggle(addClass);
        if (body.classList.contains(addClass)) {
            body.classList.remove(removeClass);
            setTimeout(() => body.classList.remove(addClass), 10000);
        }
    }

    signin.addEventListener('click', () => toggleClass('open', 'chopen'));
    signup.addEventListener('click', () => toggleClass('chopen', 'open'));

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
    document.addEventListener('DOMContentLoaded', () => {
        const menuItems = document.querySelectorAll('.dropdown-toggle');
        let activeSection = null;

        menuItems.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();

                const targetClass = item.getAttribute('data-target');
                const targetSection = document.querySelector(`.section-content.${targetClass}`);

                if (activeSection === targetSection) {
                    activeSection.classList.remove('visible');
                    activeSection.classList.add('hidden');
                    activeSection = null;
                    return;
                }

                if (activeSection) {
                    activeSection.classList.remove('visible');
                    activeSection.classList.add('hidden');
                }

                targetSection.classList.remove('hidden');
                targetSection.classList.add('visible');
                activeSection = targetSection;
            });
        });
    });
    /*---------------- HEADER NAVIGATION ----------------------*
    /*---------------- ASIDE NAVIGATION ----------------------*/
    const menuItems = document.querySelectorAll('.menu-item > a');
    menuItems.forEach(item => {
        item.addEventListener('click', (event) => {
            event.preventDefault();
            const parent = item.parentElement;
            parent.classList.toggle('open');
        });
    });
    /*---------------- ASIDE NAVIGATION ----------------------*/
    /*------------------------  CLOCK  ----------------------*/
    function updateDateTime() {
        const today = new Date();
        const dateOptions = { weekday: 'long', day: 'numeric', month: 'long' };
        const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit' };
        const formattedDate = today.toLocaleDateString('ru-RU', dateOptions);
        const formattedTime = today.toLocaleTimeString('ru-RU', timeOptions);

         document.getElementById('date').textContent = formattedDate;
        document.getElementById('time').textContent = formattedTime;
    }
     setInterval(updateDateTime, 1000);
    updateDateTime();
    /*------------------------  CLOCK END ----------------------*/
    /*------------------------ MOUSE CURSOR ----------------------*/
    const cursor = document.getElementById('custom-cursor');
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = `${e.clientX}px`;
        cursor.style.top = `${e.clientY}px`;
    });
    /*------------------------ MOUSE CURSOR END ----------------------*/
</script>

</body>
</html>
