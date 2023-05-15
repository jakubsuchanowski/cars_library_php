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
