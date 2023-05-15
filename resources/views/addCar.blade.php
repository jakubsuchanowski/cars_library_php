@extends('nav')
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 container justify-content-center card">
                <h1 class="text-center">Dodaj nowy samochód</h1>
                <div class = "card-body">
                    <form action="{{route('cars.add')}}"  method="POST">
                        {{csrf_field()}}
                        <div class = "form-group">
                            <label>Marka</label>
                            <input type="text" name="brand" placeholder="Wpisz markę samochodu" class="form-control">
                            <label>Model</label>
                            <input type="text" name="model" placeholder="Wpisz model samochodu" class="form-control">
                            <label>Rok produkcji</label>
                            <input type="number" name="production_year" placeholder="Wpisz rok produkcji" class="form-control">
                            <label>Moc [KM]</label>
                            <input type="number" name="power_hp" placeholder="Wpisz moc samochodu" class="form-control">
                            <label>Pojemność [cm3]</label>
                            <input type="number" step="0.1" name="engine_capacity" placeholder="Wpisz pojemność samochodu" class="form-control">
                            <label>Rodzaj paliwa</label>
{{--                            <input type="text" name="fuel_type" placeholder="Wpisz rodzaj paliwa" class="form-control">--}}
                            <select class="form-control" name="fuel_type">
                                <option>Gasoline</option>
                                <option>Gasoline + LPG</option>
                                <option>Diesel</option>
                            </select>
                            <label>Napęd</label>
                            <input type="text" name="drive" placeholder="Wpisz napęd" class="form-control">
                            <label>Skrzynia biegów</label>
{{--                            <input type="text" name="transmission" placeholder="Wpisz rodzaj skrzyni biegów" class="form-control">--}}
                            <select class="form-control" name="transmission">
                                <option>Automatic</option>
                                <option>Manual</option>
                            </select>
                            <label>Typ nadwozia</label>
                            <input type="text" name="type" placeholder="Podaj typ samochodu" class="form-control">
                            <label>Liczba drzwi</label>
                            <input type="number" name="doors_number" placeholder="Podaj liczbe drzwi" class="form-control">

                        </div>
                        <div class = "footer-body">
                            <button type="submit" class="btn btn-primary">Dodaj</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
