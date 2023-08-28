<x-splade-modal close-explicitly>
    <h1 class="mb-2 mt-0 text-3xl font-medium leading-tight text-primary">Edit category</h1>
    <x-splade-form :default="$category" action="/dashboard/category/{{ $category->slug }}" method="PUT">
        <p v-text="form.errors.name" />
        <x-splade-input name="name" placeholder="Category Name" :label="_('Category Name')" />
        <x-splade-submit class="mt-3" :label="_('Edit Category')" />
    </x-splade-form>
</x-splade-modal>