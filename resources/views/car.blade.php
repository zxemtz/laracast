<x-layout>
    <x-slot name="title">
        {{ $car['car'] }}
    </x-slot>

    <div class="car-detail">
        <img src="{{ $car['imageforcar'] }}" alt="{{ $car['car'] }}" class="car-image">
        <div class="car-info">
            <h3>{{ $car['car'] }}</h3>
            <p>Price: {{ $car['price'] }}</p>
            <a href="/carsales" class="back-link">← Back to list</a>
        </div>
    </div>
</x-layout>

<style>
    .car-detail {
        max-width: 800px;
        margin: 50px auto;
        text-align: center;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 30px;
        background-color: #f9f9f9;
    }

    .car-image {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .car-info h3 {
        margin: 20px 0 10px;
        font-size: 24px;
    }

    .car-info p {
        font-size: 20px;
        color: #333;
    }

    .back-link {
        display: inline-block;
        margin-top: 20px;
        text-decoration: none;
        color: #007BFF;
    }
</style>
