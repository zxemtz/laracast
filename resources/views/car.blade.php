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
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        padding: 0;
    }

    .car-detail {
        max-width: 900px;
        margin: 60px auto;
        background-color: #ffffff;
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px;
        gap: 20px;
    }

    .car-image {
        width: 100%;
        max-height: 350px;
        object-fit: cover;
        border-radius: 16px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
    }

    .car-info {
        width: 100%;
        text-align: center;
    }

    .car-info h3 {
        font-size: 28px;
        margin: 20px 0 10px;
        color: #222;
    }

    .car-info p {
        font-size: 22px;
        color: #555;
        margin-bottom: 25px;
    }

    .back-link {
        text-decoration: none;
        background-color: #007bff;
        color: white;
        padding: 12px 24px;
        border-radius: 8px;
        transition: background-color 0.3s ease;
        font-size: 16px;
    }

    .back-link:hover {
        background-color: #0056b3;
    }

    @media (max-width: 600px) {
        .car-detail {
            padding: 20px;
        }

        .car-info h3 {
            font-size: 24px;
        }

        .car-info p {
            font-size: 18px;
        }
    }
</style>