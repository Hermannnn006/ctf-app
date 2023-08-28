<x-app-layout>
    @include('layouts.navigation')
    <section id="chalengge" class="relative min-h-screen">
        <div class="blob1"></div>
        <div class="blob2"></div>
        <div class="container py-15 md:py-5">
            <h1 class="second-title text-center mt-3">Challenges</h1>
            <div class="flex flex-col gap-3">
                @foreach($categories as $category)
                    <h3 class="text-2xl font-medium lg:text-3xl"><i class="bi bi-play-fill"></i> {{ $category->name }}</h3>
                    @if($category->category_chalengges->count())
                        <div class="flex flex-row flex-wrap justify-center gap-8 md:justify-start">
                            @foreach($category->category_chalengges as $chalengge)
                                <div class="group rounded-2xl bg-gradient-to-r from-teal-500 via-violet-500 to-purple-500 mb-8 p-1 w-[350px] lg:w-[350px]">
                                    <Link modal class="flex justify-center {{ app\Http\Controllers\ChalenggeController::finished($chalengge->id) ? 'bg-cyan-200' : 'bg-slate-50' }} items-center rounded-xl group-hover:bg-cyan-200 h-44 lg:h-36" href="/chalengge/{{ $chalengge->slug }}">
                                        <div>
                                            <h3 class="text-lg text-center font-bold text-gray-900 md:text-medium">
                                                {{ $chalengge->name }}
                                            </h3>
                                            <p class="mt-2 text-sm text-center text-gray-700 md:text-medium">
                                                <i class="bi bi-coin"></i> {{ $chalengge->point }}
                                            </p>
                                        </div>
                                    </Link>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="ml-9">This category not have challenge</p>
                    @endif
                @endforeach
        </div>
    </div>
    </section>
    <x-footer-layout />
</x-app-layout>