<x-layout heading="Job">
    <h2 class="font-bold text-lg">
        {{ $job['title'] }}
    </h2>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>
