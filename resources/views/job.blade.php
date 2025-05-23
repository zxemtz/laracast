<x-layout>
    <x-slot name="title">
        Job Listings
    </x-slot>

    <div class="jobs-list">
        @foreach ($jobs as $job)
            <div class="job-item">
                <img src="{{ $job->workimage }}" alt="{{ $job->title }}" class="job-image">
                <div class="job-info">
                    <h3>{{ $job->title }}</h3>
                    <p>{{ $job->description }}</p>
                    <p>{{$job->salary}}</p>
                    <a href="/jobs/{{ $job->id }}">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>

<style>
    .jobs-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 30px;
        padding: 40px;
    }

    .job-item {
        background-color: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .job-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    }

    .job-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .job-info {
        padding: 20px;
        text-align: left;
    }

    .job-info h3 {
        font-size: 22px;
        margin: 0 0 10px;
        color: #333;
    }

    .job-info p {
        font-size: 18px;
        color: #666;
        margin-bottom: 10px;
    }

    .job-info a {
        display: inline-block;
        text-decoration: none;
        padding: 10px 20px;
        background-color: #28a745;
        color: white;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .job-info a:hover {
        background-color: #1e7e34;
    }
</style>
