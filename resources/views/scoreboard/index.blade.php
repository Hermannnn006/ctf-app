<x-app-layout>
    @include('layouts.navigation')
    <section>
        <div class="blob1"></div>
        <div class="blob2"></div>
        <div class="container">
            <h1 class="second-title text-center mb-3 mt-3">Scoreboard</h1>
            <Scoreboard />
        </div>
    </section>
    <x-footer-layout />
</x-app-layout>