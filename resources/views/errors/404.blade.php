<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lỗi[404]</title>
    <link rel="stylesheet" href="{{ asset('css/error_404.css') }}">
</head>

<body>
    <div class="container">
        <p class="title">Ôi không!!Có gì đó không ổn</p>
        <p class="subtitle">
            Đường dẫn @if (isset($slug))
                <span style="color: #F55B13 ">"{{ $slug }}"</span>
            @endif của bạn sai <br /> hoặc nó không còn tồn tại ở đây nữa.
        </p>
        <div align="center">
            <h1> <span class="ascii">(╯°□°）╯︵ ┻━┻</span></h1>
            <span class="btn-back" onclick="window.history.back()">Về Trang Hồi Nãy</span>
        </div>
    </div>
</body>

</html>
