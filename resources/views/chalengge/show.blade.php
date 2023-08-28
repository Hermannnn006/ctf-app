<x-splade-modal max-width="md" close-explicitly :close-button="false">
    <div class="flex flex-col gap-2 mb-3">
        <h1 class="text-bold text-2xl text-center">{{ $chalengge->name }}</h1>
        <p class="font-medium">Challenge</p>
        <article class="text-justify">{!! $chalengge->description !!}</article>
        <p class="text-sm font-medium capitalize">Author : {{ $chalengge->chalengger->username }}</p>
        @if ($chalengge->link) 
            <a href='{{ $chalengge->link }}' target='_blank' class='text-center bg-transparent hover:bg-blue-500 text-blue-700 font-medium hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded'>Go to chalengge <i class='bi bi-rocket-takeoff'></i></a>
        @endif
        <x-splade-toggle>
            <button @click.prevent="toggle" class="text-center bg-purple-500 hover:bg-purple-700 text-white font-medium py-2 px-4 border border-purple-500 hover:border-dashed rounded">Clue <i class="fa-solid fa-puzzle-piece"></i></button>
            <x-splade-lazy show="toggled">
                <x-slot:placeholder>
                    <div class="inline-block h-4 w-4 animate-spin rounded-full border-2 border-purple-500 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"></div>
                </x-slot:placeholder>
                <p>Clue : {{ $chalengge->clue }}</p>
            </x-splade-lazy>
        </x-splade-toggle>
    </div>
        <x-splade-form action="/chalengge/{{ $chalengge->slug }}" method="post" stay>
            <div class="relative h-10 w-full min-w-[200px]">
                <input v-model="form.answer" type="text" class="w-full bg-white text-slate-600 py-2 px-4 rounded-md border-blue-500  focus:outline-dashed focus:outline-dark" placeholder="Enter flag" />
            </div>
            <div class="flex flex-row gap-2">
                <x-splade-submit class="mt-3" name="submit" :label="_('Answer')" />
                <Link href="/chalengge" class="mt-3 py-2 px-4 bg-red-400 rounded font-semibold text-white hover:bg-red-600">Back</Link>
            </div>
    </x-splade-form>
</x-splade-modal>