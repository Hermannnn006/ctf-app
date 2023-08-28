<x-app-layout>
  <x-header-layout />
  <x-sidebar-layout/>
  <div class="mt-28 md:mt-20 md:ml-52">
    <h1 class="mb-2 mt-0 text-3xl font-medium leading-tight text-primary">Chalengges Data</h1>
    <Link modal href="{{ route('chalengge.create') }}" class="p-2 rounded bg-blue-500 text-white hover:bg-blue-800"><i class="fa-solid fa-plus"></i> Chalengge</Link>
    <div class="flex flex-col mt-2">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full text-sm font-light">
              <x-splade-table :for="$chalengges">
                <x-slot name="head">
                  <thead class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                    <tr class="text-left">
                      @foreach($chalengges->columns() as $column)
                        <th scope="col" class=" px-6 py-4">{{ $column->label }}</th>
                      @endforeach
                    </tr>
                  </thead>
              </x-slot>
              @if($chalengges->resource->count())
            <x-slot name="body">
            <tbody>
              @foreach($chalengges->resource as $chalengge)
              <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap  px-6 py-4">{{ $chalengge->name }}</td>
                <td class="whitespace-nowrap  px-6 py-4">{{ $chalengge->category_chalengge->name }}</td>
                <td class="whitespace-nowrap  px-6 py-4">{{ $chalengge->answer }}</td>
                <td class="whitespace-nowrap  px-6 py-4">{{ $chalengge->point }}</td>
                <td>
                  <Link modal href="/dashboard/chalengge/{{ $chalengge->slug }}/edit" class="mr-2"><span class="bg-yellow-400 p-2 rounded text-white hover:bg-yellow-600"><i class="fa-solid fa-pen"></i></span></Link>  
                  <Link confirm="are you sure?" href="chalengge/{{ $chalengge->slug }}" class="bg-red-400 p-2 rounded text-white hover:bg-red-800" method="DELETE"><i class="fa-solid fa-trash"></i></Link>  
                </td>
              </tr>
              @endforeach
            </tbody>
            </x-slot>
            @else
            <x-slot:empty-state>
              <tbody>
                <tr class="border-b">
                  <td colspan="5" class="whitespace-nowrap  px-6 py-4 text-center">Chalengge not found</td>
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