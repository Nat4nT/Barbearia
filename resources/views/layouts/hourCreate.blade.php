<form action="{{route('hour.create')}}" method="POST">
    @csrf
    <input type="time" name="hour" >
    <input type="submit" value="+">
</form>

