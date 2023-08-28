<x-app-layout>
    @include('layouts.navigation')
    <section id="user" class="relative min-h-screen">
        <div class="blob1"></div>
        <div class="blob2"></div>
            <div class="container py-15 md:py-5">
                <h1 class="second-title text-center mt-3">Users Data</h1>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-transparent overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 border-b border-gray-200">
                            <x-splade-table :for="$users">                        
                                @cell('action', $user)
                                <Link modal href="/users/{{ $user->username }}"><span class="text-blue-400"><i class="bi bi-eye-fill" /></span></Link>
                                @endcell
                            </x-splade-table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <x-footer-layout />
</x-app-layout>
