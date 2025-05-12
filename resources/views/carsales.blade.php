<x-layout>
    <x-slot name="title">
        Sports Cars
    </x-slot>

    <div class="cars-list">
        @foreach ($pricecars as $car)
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
    .cars-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 50px;
        margin-top: 50px;
    }

    .car-item {
        text-align: center;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 10px;
        background-color: #f9f9f9;
    }

    .car-image {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .car-info h3 {
        margin: 10px 0;
        font-size: 18px;
    }

    .car-info p {
        font-size: 16px;
        color: #333;
    }
</style>
