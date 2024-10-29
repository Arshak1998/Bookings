<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
</head>
<style>
    body{
        background: linear-gradient(to bottom, #c9d6ff, #e2e2e2);
        height: 96.3vh;
        width: 100vh;
    }
    .box{
        border: 2px solid #000000;
        width: 500px;
        height: 600px;
        transform: translateY(3.8vh) translateX(63.8vh);
        padding: 20px;
        border-radius: 5px;
    }
    p{
        padding: 5px;
    }
    h1{
        transform:  translateX(67.8vh);
        color: #242733;
    }
    a{
        position: absolute;
        color: red;
        translate: -5px 349px;
        text-decoration: none;
        font-size: 13px;
    }

</style>
<body>
<h1>Ամրագրման մանրամասներ</h1>
<div class="box">

<p><strong>Անուն:</strong> {{ $booking->anun }}</p>
<p><strong>Ազգանուն:</strong> {{ $booking->azganun }}</p>
<p><strong>Էլ․ Հասցե:</strong> {{ $booking->email }}</p>
<p><strong>Տարիք:</strong> {{ $booking->age }}</p>
<p><strong>Հեռախոսահամար:</strong> {{ $booking->phone }}</p>

<a href="{{ route('bookings.index') }}">Վերադառնալ ամրագրումների ցուցակին</a>
</div>
</body>
</html>
