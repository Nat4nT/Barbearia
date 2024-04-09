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
        @foreach ($services as $service)
            <div>
                {{ $service->name }}
                |
                {{ $service->value}}
                |
                <a href="{{route('service.show', ['service' => $service->id ])}}">Editar</a>

            </div>
        @endforeach
    </div>
</body>
</html>
