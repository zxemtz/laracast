<x-layout>
    <x-slot name="title">
        Sports Cars
    </x-slot>

    <div class="cars-list">
        @foreach ($PriceCars as $car)
            <div class="car-item">
                <img src="{{ $car['imageforcar'] }}" alt="{{ $car['car'] }}" class="car-image">
                <div class="car-info">
                    <h3>{{ $car['car'] }}</h3>
                    <p>Price: {{ $car['price'] }}</p>
                    <a href="/carsales/{{ $car['id'] }}">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>

<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        padding: 0;
    }

    .cars-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 30px;
        padding: 40px;
    }

    .car-item {
        background-color: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .car-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    }

    .car-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .car-info {
        padding: 20px;
        text-align: left;
    }

    .car-info h3 {
        font-size: 22px;
        margin: 0 0 10px;
        color: #333;
    }

    .car-info p {
        font-size: 18px;
        color: #666;
        margin-bottom: 15px;
    }

    .car-info a {
        display: inline-block;
        text-decoration: none;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .car-info a:hover {
        background-color: #0056b3;
    }
</style>
