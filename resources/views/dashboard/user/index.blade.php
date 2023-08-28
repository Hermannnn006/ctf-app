<x-app-layout>
    <x-header-layout />
    <x-sidebar-layout/>
    <div class="mt-28 md:mt-20 md:ml-52">
        <h1 class="mb-2 mt-0 text-3xl font-medium leading-tight text-primary">Users Data</h1>
        <div class="flex flex-col mt-2">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-sm font-light">
                        <x-splade-table :for="$users">
                            <x-slot name="head">
                                <thead class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                                  <tr class="text-left">
                                    @foreach($users->columns() as $column)
                                      <th scope="col" class=" px-6 py-4">{{ $column->label }}</th>
                                    @endforeach
                                  </tr>
                                </thead>
                            </x-slot>
                            @if($users->resource->count())
                            <x-slot name="body">
                            <tbody>
                            @foreach($users->resource as $user)
                            <tr class="border-b dark:border-neutral-500">
                                <td class="whitespace-nowrap px-6 py-4">{{ $user->name }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $user->email }}</td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <x-splade-form submit-on-change background debounce="500" :default="$user" action="/dashboard/user/{{ $user->username }}" method="PUT">
                                        <x-splade-select name="role_id" :options="$roles" option-label="role" option-value="id" />
                                            <div v-if="form.processingInBackground" class="flex items-center justify-center w-full h-full">
                                                <div class="flex justify-center items-center space-x-1 text-sm text-gray-700">
                                                            <svg fill='none' class="w-6 h-6 animate-spin" viewBox="0 0 32 32" xmlns='http://www.w3.org/2000/svg'>
                                                                <path clip-rule='evenodd'
                                                                    d='M15.165 8.53a.5.5 0 01-.404.58A7 7 0 1023 16a.5.5 0 011 0 8 8 0 11-9.416-7.874.5.5 0 01.58.404z'
                                                                    fill='currentColor' fill-rule='evenodd' />
                                                            </svg>
                                                    <div>Change role...</div>
                                                </div>
                                            </div>
                                    </x-splade-form>
                                </td>
                                <td class="whitespace-nowrap  px-6 py-4">
                                <Link confirm="are you sure?" href="user/{{ $user->username }}" class="bg-red-400 p-2 rounded text-white hover:bg-red-800" method="DELETE"><i class="fa-solid fa-trash"></i></Link>  
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            </x-slot>
                            @else
                            <x-slot:empty-state>
                              <tbody>
                                <tr class="border-b">
                                  <td class="whitespace-nowrap  px-6 py-4">User not found</td>
                                </tr>
                              </tbody>
                            </x-slot>
                            @endif
                        </x-splade-table>
                    </table>
                </div>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- <x-app-layout>
    <x-header-layout />
    <div class="flex min-h-screen bg-slate-300">
        <div>
            <x-sidebar-layout />
        </div>
        <div class="w-[800px] ml-1 py-36 md:py-20 md:mx-auto">
            <h1 class="mb-2 mt-0 text-3xl font-medium leading-tight text-primary">Users Data</h1>
            <div class="flex flex-col mt-2">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8 text-left">
                    <div class="overflow-hidden">
                    <table class="min-w-full text-sm font-light">
                    <x-splade-table :for="$users">
                        <x-slot name="head">
                            <thead class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                            <tr>
                                @foreach($users->columns() as $column)
                                <th scope="col" class=" px-6 py-4">{{ $column->label }}</th>
                                @endforeach
                            </tr>
                            </thead>
                        </x-slot>
                        @if($users->resource->count())
                            <x-slot name="body">
                            <tbody>
                            @foreach($users->resource as $user)
                            <tr class="border-b dark:border-neutral-500">
                                <td class="whitespace-nowrap  px-6 py-4">{{ $user->name }}</td>
                                <td class="whitespace-nowrap  px-6 py-4">{{ $user->email }}</td>
                                <td class="whitespace-nowrap  px-6 py-4">
                                    <x-splade-form submit-on-change background debounce="500" :default="$user" action="/dashboard/user/{{ $user->username }}" method="PUT">
                                        <x-splade-select name="role_id" :options="$roles" option-label="role" option-value="id" />
                                            <div v-if="form.processingInBackground" class="flex items-center justify-center w-full h-full">
                                                <div class="flex justify-center items-center space-x-1 text-sm text-gray-700">
                                                            <svg fill='none' class="w-6 h-6 animate-spin" viewBox="0 0 32 32" xmlns='http://www.w3.org/2000/svg'>
                                                                <path clip-rule='evenodd'
                                                                    d='M15.165 8.53a.5.5 0 01-.404.58A7 7 0 1023 16a.5.5 0 011 0 8 8 0 11-9.416-7.874.5.5 0 01.58.404z'
                                                                    fill='currentColor' fill-rule='evenodd' />
                                                            </svg>
                                                    <div>Change role...</div>
                                                </div>
                                            </div>
                                    </x-splade-form>
                                </td>
                                <td class="whitespace-nowrap  px-6 py-4">
                                <Link confirm="are you sure?" href="user/{{ $user->username }}" class="bg-red-400 p-2 rounded text-white hover:bg-red-800" method="DELETE"><i class="fa-solid fa-trash"></i></Link>  
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            </x-slot>
                            @else
                            <x-slot:empty-state>
                              <tbody>
                                <tr class="border-b">
                                  <td class="whitespace-nowrap  px-6 py-4">User not found</td>
                                </tr>
                              </tbody>
                            </x-slot>
                            @endif
                    </x-splade-table>
                    </table>
                </div>
                </div>
            </div>
        </div>
    
    </div>
    </x-app-layout> --}}