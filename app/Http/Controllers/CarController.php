<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function carsList(){
        $cars = Car::all();
        return view('cars', ['cars'=>$cars]);
    }

    public function showCarForm(){
        return view('addCar');
    }

    public function addCar(Request $request){
        $validated = $request ->validate([
           'brand' => ['required', 'string'],
           'model' => ['required', 'string'],
           'production_year' => ['required', 'int'],
           'power_hp' => ['required', 'int'],
           'engine_capacity' => ['required', 'int'],
           'fuel_type' => ['required', 'string'],
           'drive' => ['required', 'string'],
           'transmission' => ['required', 'string'],
           'type' => ['required', 'string'],
           'doors_number' => ['required', 'int']
        ],
            [
                'brand.required'=>'Podaj markę!',
                'model.required'=>'Podaj model!',
                'production_year.required'=>'Podaj rok produkcji!',
                'power_hp.required'=>'Podaj moc!',
                'engine_capacity.required'=>'Podaj pojemność silnika!',
                'fuel_type.required'=>'Podaj rodzaj paliwa!',
                'drive.required'=>'Podaj rodzaj napędu!',
                'transmission.required'=>'Podaj rodzaj skrzyni biegów!',
                'type.required'=>'Podaj typ nadwozia!',
                'doors_number.required'=>'Podaj liczbę drzwi!'
            ]);


        $car = new Car();
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->production_year = $request->production_year;
        $car->power_hp = $request->power_hp;
        $car->engine_capacity = $request->engine_capacity;
        $car->fuel_type = $request->fuel_type;
        $car->drive = $request->drive;
        $car->transmission = $request->transmission;
        $car->type = $request->type;
        $car->doors_number = $request->doors_number;
        $car->save();
        return redirect()->route('cars.list');
    }

    public function deleteCar($id){
        Car::destroy($id);
        return redirect()->route('cars.list');
    }
    public function showEditCarForm($id){
        $car = Car::find($id);
        return view('editCar', ['car'=>$car]);
    }

    public function updateCar($id, Request $request){
        $validated = $request ->validate([
            'brand' => ['required', 'string'],
            'model' => ['required', 'string'],
            'production_year' => ['required', 'int'],
            'power_hp' => ['required', 'int'],
            'engine_capacity' => ['required', 'int'],
            'fuel_type' => ['required', 'string'],
            'drive' => ['required', 'string'],
            'transmission' => ['required', 'string'],
            'type' => ['required', 'string'],
            'doors_number' => ['required', 'int']
        ],
            [
                'brand.required'=>'Podaj markę!',
                'model.required'=>'Podaj model!',
                'production_year.required'=>'Podaj rok produkcji!',
                'power_hp.required'=>'Podaj moc!',
                'engine_capacity.required'=>'Podaj pojemność silnika!',
                'fuel_type.required'=>'Podaj rodzaj paliwa!',
                'drive.required'=>'Podaj rodzaj napędu!',
                'transmission.required'=>'Podaj rodzaj skrzyni biegów!',
                'type.required'=>'Podaj typ nadwozia!',
                'doors_number.required'=>'Podaj liczbę drzwi!'
            ]);
        $car = Car::find($id);
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->production_year = $request->production_year;
        $car->power_hp = $request->power_hp;
        $car->engine_capacity = $request->engine_capacity;
        $car->fuel_type = $request->fuel_type;
        $car->drive = $request->drive;
        $car->transmission = $request->transmission;
        $car->type = $request->type;
        $car->doors_number = $request->doors_number;
        $car->save();

        return redirect()->route('cars.list');
    }
}
