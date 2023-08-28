<x-app-layout>
    @include('layouts.navigation')
    <section class="relative min-h-screen">
        <div class="blob1"></div>
        <div class="blob2"></div>
        <div class="container py-15 md:py-5">
            <h1 class="second-title text-center mb-3 mt-3">Scoreboard</h1>
            <Scoreboard></Scoreboard>
            {{-- <x-splade-table :for="$users">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-sm font-light">
                                    <x-slot name="head">
                                        <thead
                                            class="text-left border-b bg-gradient-to-r from-cyan-500 to-blue-500 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                                            <tr>
                                                @foreach ($users->columns() as $column)
                                                    <th class="px-6 py-4">{{ $column->label }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                    </x-slot>
                                    <x-slot name="body">
                                        <tbody>
                                            @foreach ($users->resource as $user)
                                                <tr
                                                    class="border-b bg-transparent dark:border-neutral-500 dark:bg-neutral-700">
                                                    <td class="whitespace-nowrap px-6 py-4 text-left">
                                                        {{ $loop->iteration }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4 text-left">
                                                        {{ $user->name }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4 text-left">
                                                        {{ $user->nilai }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </x-slot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </x-splade-table> --}}
        </div>
    </section>
    <x-footer-layout />
</x-app-layout>
