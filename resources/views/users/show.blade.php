<x-splade-modal max-width="md" close-explicitly>
    <x-splade-data :default="$user">
        <div class="text-center">
            <h1 class="mb-2 font-medium text-lg"><span v-text="data.name" />'s Profil</h1>
            <p>Username : <span v-text="data.username" /></p>
            <p>Nama : <span v-text="data.name" /></p>
            <p class="mb-2">Point : <span v-text="data.nilai" /></p>
            <div>
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
                            <p class="mt-3">User not have challenge solved yet.</p>
                        @endif
                    </x-splade-lazy>
                </x-splade-toggle>
            </div>
            <button type="button" @click="modal.close" class="bg-red-600 p-2 px-4 rounded font-semibold text-white">Close</button>
        </div>
    </x-splade-data>
</x-splade-modal>