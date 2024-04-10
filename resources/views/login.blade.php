<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            @csrf
            <input type="text" name="phone" placeholder="Phone" required>
            <input type="password" name="password" placeholder="Senha">
            <input type="submit" value="Log in">
        </form>
        <a href="{{route('register')}}">Registrar</a>
    </div>
</body>
</html>
