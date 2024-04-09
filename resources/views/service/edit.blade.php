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
        <form action="{{route('service.edit',['service' => $service->id])}} " method="post">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{$service->name}}" required>
            <input type="number" name="value" value="{{$service->value}}" required step="0.01" min="0">
            @if ($service->status)
                <input type="radio" name="status" value="1" checked> Ativo
                <input type="radio" name="status" value="0" > Inativo
            @else (!$service->status)
                <input type="radio" name="status" value="1" >Ativo
                <input type="radio" name="status" value="0" checked> Inativo
            @endif
            <input type="submit" value="Update">
        </form>
    </div>

</body>
</html>
