<x-layout>
    <x-slot name="title">
        {{ $job['job'] }}
    </x-slot>

    <div class="job-detail">
        <img src="{{ $job['workimage'] }}" alt="{{ $job['job'] }}" class="job-image">
        <div class="job-info">
            <h3>{{ $job['title'] }}</h3>
            <p>description: {{$job['description']}}</p>
            <p>Price: {{ $job['salary'] }}</p>
            <a href="/job" class="back-link">← Back to list</a>
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

   .job-detail {
    max-width: 700px;
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

.job-image {
    width: 100%;
    max-height: 350px;
    object-fit: cover;
    border-radius: 16px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
}

.job-info {
    width: 100%;
    text-align: center;
}

.job-info h3 {
    font-size: 28px;
    margin: 20px 0 10px;
    color: #222;
}

.job-info p {
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
    .job-detail {
        padding: 20px;
    }

    .job-info h3 {
        font-size: 24px;
    }

    .job-info p {
        font-size: 18px;
    }
}
</style>