<form action="{{route('service.store')}}" method="post">
    @csrf
    <input required type="text" name="name" id="" placeholder="Service Name">
    <input required type="number" name="value" id="" placeholder="Service Value" min="0" step="0.01">
    <input type="submit" value="Send">
</form>
<div>

    @foreach ($hours as $hour)
        <div>
            {{substr($hour->hour,0,5)}}

        </div>
    @endforeach
</div>

@include('layouts.hourCreate')
