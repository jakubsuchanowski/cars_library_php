@extends('nav')
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 container justify-content-center card">
{{--                @if ($errors->any())--}}
{{--                    <div class="alert alert-danger" >--}}
{{--                        <ul>--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <li>{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}
                <h1 class="text-center">Dodaj nowy samochód</h1>
                <div class = "card-body">
                    <form action="{{route('cars.add')}}"  method="POST">
                        {{csrf_field()}}
                        <div class = "form-group">
                            <div class="form-group">
                                <label>Marka</label>
                                <input type="text" name="brand" placeholder="Podaj markę" class="form-control @error('brand') is-invalid @enderror">
                                @error('brand')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Model</label>
                                <input type="text" name="model" placeholder="Podaj model" class="form-control @error('model') is-invalid @enderror">
                                @error('model')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Rok produkcji</label>
                                <input type="number" name="production_year" placeholder="Podaj rok produkcji" class="form-control @error('production_year') is-invalid @enderror">
                                @error('production_year')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Moc</label>
                                <input type="number" name="power_hp" placeholder="Podaj moc " class="form-control @error('power_hp') is-invalid @enderror">
                                @error('power_hp')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pojemność</label>
                                <input type="number" step="0.1" name="engine_capacity" placeholder="Podaj pojemność silnika" class="form-control @error('engine_capacity') is-invalid @enderror">
                                @error('engine_capacity')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Rodzaj paliwa</label>
                                <select class="form-control @error('fuel_type') is-invalid @enderror" name="fuel_type">
                                    <option>Gasoline</option>
                                    <option>Gasoline + LPG</option>
                                    <option>Diesel</option>
                                </select>
                                @error('fuel_type')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Napęd</label>
                                <input type="text" name="drive" placeholder="Wpisz rodzaj napędu" class="form-control @error('drive') is-invalid @enderror">
                                @error('drive')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Skrzynia biegów</label>
                                <select class="form-control @error('transmission') is-invalid @enderror" name="transmission">
                                    <option>Automatic</option>
                                    <option>Manual</option>
                                </select>
                                @error('transmission')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Typ nadwozia</label>
                                <input type="text" name="type" placeholder="Wpisz typ nadwozia" class="form-control @error('type') is-invalid @enderror">
                                @error('type')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Liczba drzwi</label>
                                <input type="number" name="doors_number" placeholder="Wpisz liczbe drzwi" class="form-control @error('doors_number') is-invalid @enderror">
                                @error('doors_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class = "footer-body text-center">
                            <button type="submit" class="btn btn-primary">Dodaj</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
