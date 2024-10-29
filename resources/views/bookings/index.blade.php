<style>
    body{
        position: relative;
        user-select: none;
        height: 10vh;
        width: 80%;
        background: linear-gradient(to right, #1e130c, #9a8478);
    }
    table{
        background: rgba(37, 37, 37, 0.58);
        margin: 50px 160px;
        border: 1px solid #dad3d3;
        width: 1000px;
        height:auto;
        border-radius: 10px;
        padding: 8px;
    }
    td{
        translate:0 15px;
        padding: 15px;
        color: white;
    }
    th{
        color: #00d9f4;
        letter-spacing: 2px;
    }
    h1{
        transform: translateX(33.8vh);
        padding-bottom: 50px;
        color: ghostwhite;
        position: relative;
        left: 16%;
        top: 20px;
    }

</style>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    </style>
</head>
<body>

    <div class="konteyner">
        @section('content')
            @extends('layouts.app')

        <h1>Ամրագրումների ցանկ</h1>



        @if ($bookings->count())
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Անուն</th>
                    <th>Ազգանուն</th>
                    <th>Էլ․ Հասցե</th>
                    <th>Տարիք</th>
                    <th>Հեռախոսահամար</th>
                    <th>Գործողություններ</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $booking->anun }}</td>
                        <td>{{ $booking->azganun }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->age }}</td>
                        <td>{{ $booking->phone }}</td>
                        <td>
                            <a href="{{ route('bookings.show', $booking) }}" class="btn btn-info" style="margin-left: 40px; color: #0031aa;text-decoration: none;">Մանրամասն</a>
                            <form action="{{ route('bookings.destroy', $booking) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены?')" style="color:#ff0000; background-color: #878787; cursor: pointer; border: none; border-radius: 2px; width: 20px; margin-left: 20px;">x</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {{ $bookings->links() }}
            </div>
        @else
            <p>Ամրագրումներ չեն գտնվել.</p>
        @endif
    </div>
@endsection


</body>
</html>
