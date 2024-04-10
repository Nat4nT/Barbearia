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
        <form method="POST" action="{{route('me.register')}}">
            @csrf
            <input type="text" name="name" placeholder="Nome">
            <input type="email" name="email" placeholder="E-mail">
            <input type="text" name="phone" placeholder="Telefone">
            <input type="password" name="" placeholder="Senha">
            <input type="submit" value="Registrar">
        </form>
    </div>

</body>
</html>
