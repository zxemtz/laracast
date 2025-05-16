<?php

use App\Models\pricecar;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\PriceCars;

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

// Ruta para mostrar la lista de autos
Route::get('/carsales', function () {
   return view('carsales', [
    'PriceCars' => PriceCar::all()
    ]);
});

// Ruta para mostrar los detalles de un carro específico
Route::get('/carsales/{id}', function ($id) {
    $carsales = [
    ];

    // Buscar el carro con el id proporcionado
    $car = Arr::first(PriceCar::all(), fn($car) => $car['id'] == $id);


    // Si no se encuentra el carro, Laravel lanzará automáticamente una excepción 404
    return view('car', ['car' => $car]);
});

