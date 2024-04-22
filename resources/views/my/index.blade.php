<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{$entrou}}
    @if ( $availables != null  )
    {{-- {{$availables}} --}}
    {{($teste)}}
        @foreach ($availables as $hour)
            {{($hour->data)}}
            {{date($hour->data,strtotime("+1 day"))}}
            {{-- {{strtotime($hour->data,'tomorrow')}} --}}
        @endforeach
    @else
        Testando
    @endif

</body>
</html>
