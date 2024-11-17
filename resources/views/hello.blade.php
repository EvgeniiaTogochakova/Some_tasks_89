<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User registration</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="container">
        <p class="greeting">Добрый день, {{$user['User name']}} </p>
        <p>Ваша фамилия: {{$user['Last name']}}<p>
        <p>Ваш электронный адрес: {{$user['Email']}}<p>
    </div>
</body>

</html>