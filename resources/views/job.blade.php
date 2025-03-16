<x-layout>
    <x-slot:heading> Single job </x-slot:heading>

    <h2 class="font-bold text-2xl">{{ $job["title"] }}</h2>
    <p>Per year: {{ $job["salary"] }}</p>
</x-layout>
