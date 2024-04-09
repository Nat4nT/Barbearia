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
        <form action="{{route('service.store')}}" method="post">
            @csrf
            <input required type="text" name="name" id="" placeholder="Service Name">
            <input required type="number" name="value" id="" placeholder="Service Value" min="0" step="0.01">
            <input type="submit" value="Send">
        </form>
    </div>
</body>
</html>
