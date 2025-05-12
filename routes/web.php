<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
        'pricecars' => [
            ['id' => 1, 'car' => 'Ferrari F8 Tributo', 'price' => '$320,000 USD', 'imageforcar' => 'https://i.postimg.cc/x8s6tWVz/ferrari-f8-tributo-02-1568015707.avif'],
            ['id' => 2, 'car' => 'Ferrari 812 Superfast', 'price' => '$470,000 USD', 'imageforcar' => 'https://i.postimg.cc/L6nBqHq9/0ffa98d53fbd50352d5fa6cd0e208920x.jpg'],
            ['id' => 3, 'car' => 'Ferrari 488 Pista', 'price' => '$400,000 USD', 'imageforcar' => 'https://i.postimg.cc/C1ZnQLsL/5d371735c3f9ec0af647572d-ferrari-488pista-intro-socialshare.avif']
        ]
    ]);
});

// Ruta para mostrar los detalles de un carro específico
Route::get('/carsales/{id}', function ($id) {
    $carsales = [
        ['id' => 1, 'car' => 'Ferrari F8 Tributo', 'price' => '$320,000 USD', 'imageforcar' => 'https://i.postimg.cc/x8s6tWVz/ferrari-f8-tributo-02-1568015707.avif'],
        ['id' => 2, 'car' => 'Ferrari 812 Superfast', 'price' => '$470,000 USD', 'imageforcar' => 'https://i.postimg.cc/L6nBqHq9/0ffa98d53fbd50352d5fa6cd0e208920x.jpg'],
        ['id' => 3, 'car' => 'Ferrari 488 Pista', 'price' => '$400,000 USD', 'imageforcar' => 'https://i.postimg.cc/C1ZnQLsL/5d371735c3f9ec0af647572d-ferrari-488pista-intro-socialshare.avif']
    ];

    // Buscar el carro con el id proporcionado
    $car = Arr::first($carsales, fn($car) => $car['id'] == $id);

    // Si no se encuentra el carro, Laravel lanzará automáticamente una excepción 404
    return view('car', ['car' => $car]);
});
