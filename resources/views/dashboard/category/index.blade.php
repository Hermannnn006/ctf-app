<x-app-layout>
    <x-header-layout />
    <x-sidebar-layout />
    <div class="mt-28 md:mt-20 md:ml-52 md:max-w-full">
        <h1 class="mb-2 mt-0 text-3xl font-medium leading-tight text-primary">Categories Data</h1>
        <Link modal href="{{ route('category.create') }}" class="p-2 rounded bg-blue-500 text-white hover:bg-blue-800"><i
            class="fa-solid fa-plus"></i> Category</Link>
        <div class="flex flex-col mt-2">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-sm font-light">
                            <x-splade-table :for="$categories">
                                <x-slot name="head">
                                    <thead
                                        class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                                        <tr>
                                            @foreach ($categories->columns() as $column)
                                                <th scope="col" class="px-6 py-4">{{ $column->label }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                </x-slot>
                                @if ($categories->resource->count())
                                    <x-slot name="body">
                                        <tbody>
                                            @foreach ($categories->resource as $category)
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap  px-6 py-4">{{ $loop->iteration }}</td>
                                                    <td class="whitespace-nowrap  px-6 py-4">{{ $category->name }}</td>
                                                    <td>
                                                        <Link modal
                                                            href="/dashboard/category/{{ $category->slug }}/edit"
                                                            class="mr-2"><span
                                                            class="bg-yellow-400 p-2 rounded text-white hover:bg-yellow-600"><i
                                                                class="fa-solid fa-pen"></i></span></Link>
                                                        <Link confirm="are you sure?"
                                                            href="category/{{ $category->slug }}"
                                                            class="bg-red-400 p-2 rounded text-white hover:bg-red-800"
                                                            method="DELETE"><i class="fa-solid fa-trash"></i></Link>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </x-slot>
                                @else
                                    <x-slot:empty-state>
                                        <tbody>
                                            <tr class="border-b">
                                                <td class="whitespace-nowrap  px-6 py-4">Category not found</td>
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
