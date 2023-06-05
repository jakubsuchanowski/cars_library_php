@extends('nav')
@section('content')
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Marka</th>
        <th scope="col">Model</th>
        <th scope="col">Rok produkcji</th>
        <th scope="col">Moc</th>
        <th scope="col">Pojemność</th>
        <th scope="col">Rodzaj paliwa</th>
        <th scope="col">Rodzaj napędu</th>
        <th scope="col">Skrzynia biegów</th>
        <th scope="col">Typ</th>
        <th scope="col">Liczba drzwi</th>
        <th scope="col">Akcja</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
    <tr>
        <td>{{$car->brand}}</td>
        <td>{{$car->model}}</td>
        <td>{{$car->production_year}}</td>
        <td>{{$car->power_hp}}</td>
        <td>{{$car->engine_capacity}}</td>
        <td>{{$car->fuel_type}}</td>
        <td>{{$car->drive}}</td>
        <td>{{$car->transmission}}</td>
        <td>{{$car->type}}</td>
        <td>{{$car->doors_number}}</td>
        <td>
            <a href="{{route('cars.editForm',['id'=> $car->id])}}" class="btn btn-warning">Edytuj</a>
            <form method="POST" action="{{route('cars.delete',['id'=> $car->id])}}}" >
                @method('delete')
            <button type="submit" class="btn btn-danger">Usuń</button>
            </form>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
