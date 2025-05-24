<?php

use App\Models\pricecar;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function() {
    return view('about',[
        'PriceCars' => PriceCar::all()
    ]);
});

Route::get('/contact', function() {
    return view('contact');
});
Route::get('/job', function () {
   return view('job', ['jobs' => Job::all()]);
});

// Mostrar detalle de un trabajo por ID
Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);
    return view('jobs', ['job' => $job]);
});

// Ruta para mostrar la lista de autos
Route::get('/carsales', function () {
   return view('carsales', [
    'PriceCars' => PriceCar::all()
    ]);
});

Route::get('/carsales/{id}', function ($id) {
    $carsales = [
    ];

    // Buscar el carro con el id proporcionado
    $car = Arr::first(PriceCar::all(), fn($car) => $car['id'] == $id);

    return view('car', ['car' => $car]);
});


