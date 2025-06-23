<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <h2>
        <b>{{ $job['title'] }}</b>
    </h2>

    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>
