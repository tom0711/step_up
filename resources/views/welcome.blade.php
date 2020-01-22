<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SUP</title>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <!-- JavaScript -->
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<body>
    <div>
        <div>
            <img src="{{ asset('img/stepup_logo.jpeg') }}">
        </div>
        <form action="" method="post">
            <input type="submit" name="login" value="ログイン">
        </form>
        <form action="" method="post">
            <input type="submit" name="region" value="アカウント作成">
        </form>
    </div>
</body>
</html>
