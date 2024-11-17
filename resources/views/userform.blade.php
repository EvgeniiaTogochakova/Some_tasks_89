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
        <div class="card">
            <div class="card-header">User registration</div>
            <div class="card-body">
                <form action="{{url('store_form')}}" method="post" name="add-user" id="add-user">
                    @csrf
                    <div class="form">
                        <div>
                        <label for="username">Имя</label>
                        <input type="text" id="username" name="username" class="form-unit" required="">
                        </div>
                        <div>
                        <label for="lastname">Фамилия</label>
                        <input type="text" id="lastname" name="lastname" class="form-unit" required="">
                        </div>
                        <div>
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" class="form-unit" required="">
                        </div>
                    </div>
                    <button type="submit" class="button">Отправить</button>
                </form>
            </div>

        </div>
    </div>
</body>
</html>