<x-app-layout>
    <x-header-layout />
    <x-sidebar-layout/>
    <div class="mt-28 md:mt-20 md:ml-52">
        <h3 class="font-medium text-2xl">Selamat Datang, {{ auth()->user()->name }}</h3>
        <hr>
        <div class="flex flex-col md:flex-row md:gap-3">
    
            <div class="flex bg-gray-800 py-4 px-4 mt-4 rounded justify-between md:w-60">
                <div class="flex flex-col justify-between">
                    <h5 class="text-white text-2xl font-medium">Users</h5>
                    <p class="text-white text-xl font-normal">{{ $users }}</p>
                </div>
                <div>
                <span class="text-white text-7xl"><i class="fa-regular fa-user"></i></span>
                </div>
            </div>

            <div class="flex bg-gray-800 py-4 px-4 mt-4 rounded justify-between md:w-60">
                <div class="flex flex-col justify-between">
                    <h5 class="text-white text-2xl font-medium">Challenges</h5>
                    <p class="text-white text-xl font-normal">{{ $chalengges }}</p>
                </div>
                <div>
                <span class="text-white text-7xl"><i class="fa-solid fa-bug"></i></span>
                </div>
            </div>

            <div class="flex bg-gray-800 py-4 px-4 mt-4 rounded justify-between md:w-60">
                <div class="flex flex-col justify-between">
                    <h5 class="text-white text-2xl font-medium">Categories</h5>
                    <p class="text-white text-xl font-normal">{{ $categories }}</p>
                </div>
                <div>
                <span class="text-white text-7xl"><i class="fa-solid fa-list"></i></span>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>