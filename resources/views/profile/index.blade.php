<x-app-layout>
    @include('layouts.navigation')
    {{-- <section class="relative min-h-screen">
        <div class="blob1"></div>
        <div class="blob2"></div>
        <div class="container py-15 md:py-2">
            <div class="max-w-lg mx-auto">
                <div class="p-6 bg-white-gradient rounded-xl mt-4 border-double border-2 border-indigo-400">
                    <x-splade-data :default="$user">
                        <h1 class="mb-2 font-medium text-xl text-center capitalize">My Profile</h1>
                        <div>
                            <div class="flex justify-between">
                                <div>Username</div>
                                <div>
                                    <p v-text="data.username"></p>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div>Name</div>
                                <div>
                                    <p v-text="data.name"></p>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div>Chalengges Solved</div>
                                <div>
                                    <p>{{ $user->chalengges->count() }}</p>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div>Points</div>
                                <div>
                                    <p v-text="data.nilai"></p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="p-2 bg-blue-700 inline text-white rounded font-semibold hover:bg-blue-900">
                                    <Link href="/profile/edit">Edit Profile</Link>
                                </div>

                                <x-splade-toggle>
                                    <button @click.prevent="toggle"
                                        class="font-semibold p-2 bg-purple-600 rounded text-white scale-90 hover:bg-purple-700 hover:scale-75 ease-in-out duration-300">More
                                        Details</button>

                                    <x-splade-lazy show="toggled">
                                        <x-slot:placeholder>
                                            <p>Loading data...</p>
                                        </x-slot:placeholder>
                                        <h1 class="mt-1 text-xl">Chalengge solved detail</h1>
                                        @if ($user->chalengges->count())
                                            @foreach ($user->chalengges as $chalengge)
                                                <p class="mt-3">
                                                    {{ $chalengge->name . ' - ' . $chalengge->pivot->created_at->diffForHumans() }}
                                                </p>
                                            @endforeach
                                        @else
                                            <p class="mt-3">You dont have chalengge solved yet.
                                                <Link href="/chalengge" class="text-slate-500 underline">let's find the
                                                flag</Link>
                                            </p>
                                        @endif
                                    </x-splade-lazy>
                                </x-splade-toggle>
                            </div>
                    </x-splade-data>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="relative min-h-screen">
        <div class="blob1"></div>
        <div class="blob2"></div>
        <div class="container py-15 md:py-2">
            <div class="max-w-lg mx-auto">
                <div class="p-6 bg-white-gradient rounded-xl mt-4 border-double border-2 border-indigo-400">
                    <x-splade-data :default="$user">
                        <h1 class="mb-2 font-medium text-xl text-center capitalize">My Profile</h1>
                        <div>
                            <div class="flex justify-between">
                                <div>Username</div>
                                <div>
                                    <p v-text="data.username"></p>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div>Name</div>
                                <div>
                                    <p v-text="data.name"></p>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div>Chalengges Solved</div>
                                <div>
                                    <p>{{ $user->chalengges->count() }}</p>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div>Points</div>
                                <div>
                                    <p v-text="data.nilai"></p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="p-2 bg-blue-700 inline text-white rounded font-semibold hover:bg-blue-900">
                                    <Link href="/profile/edit">Edit Profile</Link>
                                </div>
                                <x-splade-toggle>
                                    <button @click.prevent="toggle"
                                        class="font-semibold p-2 bg-purple-600 rounded text-white scale-90 hover:bg-purple-700 hover:scale-75 ease-in-out duration-300">More
                                        Details</button>

                                    <x-splade-lazy show="toggled">
                                        <x-slot:placeholder>
                                            <p>Loading data...</p>
                                        </x-slot:placeholder>
                                        <h1 class="mt-1 text-xl">Chalengge solved detail</h1>
                                        @if ($user->chalengges->count())
                                            @foreach ($user->chalengges as $chalengge)
                                                <p class="mt-3">
                                                    {{ $chalengge->name . ' - ' . $chalengge->pivot->created_at->diffForHumans() }}
                                                </p>
                                            @endforeach
                                        @else
                                            <p class="mt-3">You dont have chalengge solved yet.
                                                <Link href="/chalengge" class="text-slate-500 underline">let's find the
                                                flag</Link>
                                            </p>
                                        @endif
                                    </x-splade-lazy>
                                </x-splade-toggle>
                            </div>
                        </div>
                    </x-splade-data>
                </div>
            </div>
        </div>
    </section>
    <x-footer-layout />
</x-app-layout>