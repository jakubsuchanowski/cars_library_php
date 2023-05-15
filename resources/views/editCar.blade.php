@extends('nav')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 container justify-content-center card">
                <h1 class="text-center">Edytuj samochód</h1>
                <div class = "card-body">
                    <form action="{{route('cars.update', ['id'=>$car->id])}}"  method="POST">
                        {{csrf_field()}}
                        <div class = "form-group">
                            <label>Marka</label>
                            <input value="{{$car->brand}}" type="text" name="brand" placeholder="Wpisz markę samochodu" class="form-control">
                            <label>Model</label>
                            <input value="{{$car->model}}" type="text" name="model" placeholder="Wpisz model samochodu" class="form-control">
                            <label>Rok produkcji</label>
                            <input value="{{$car->production_year}}" type="number" name="production_year" placeholder="Wpisz rok produkcji" class="form-control">
                            <label>Moc</label>
                            <input value="{{$car->power_hp}}" type="number" name="power_hp" placeholder="Wpisz moc samochodu" class="form-control">
                            <label>Pojemność</label>
                            <input value="{{$car->engine_capacity}}" type="number" step="0.1" name="engine_capacity" placeholder="Wpisz pojemność samochodu" class="form-control">
                            <label>Rodzaj paliwa</label>
{{--                            <input value="{{$car->fuel_type}}" type="text" name="fuel_type" placeholder="Wpisz rodzaj paliwa" class="form-control">--}}
                            <select class="form-control" value="{{$car->fuel_type}}" name="fuel_type">
                                <option>Gasoline</option>
                                <option>Gasoline + LPG</option>
                                <option>Diesel</option>
                            </select>
                            <label>Napęd</label>
                            <input value="{{$car->drive}}" type="text" name="drive" placeholder="Wpisz napęd" class="form-control">
                            <label>Skrzynia biegów</label>
                            <select class="form-control" value="{{$car->transmission}}" name="transmission">
                                <option>Automatic</option>
                                <option>Manual</option>
                            </select>
{{--                            <input value="{{$car->transmission}}"type="text" name="transmission" placeholder="Wpisz rodzaj skrzyni biegów" class="form-control">--}}
                            <label>Typ nadwozia</label>
                            <input value="{{$car->type}}" type="text" name="type" placeholder="Podaj typ samochodu" class="form-control">
                            <label>Liczba drzwi</label>
                            <input value="{{$car->doors_number}}" type="number" name="doors_number" placeholder="Podaj liczbe drzwi" class="form-control">

                        </div>
                        <div class = "footer-body">
                            <button type="submit" class="btn btn-primary">Zapisz</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
