<x-splade-modal close-explicitly>
    <h1 class="mb-2 mt-0 text-3xl font-medium leading-tight text-primary">Add Category</h1>
    <x-splade-form>
        <p v-text="form.errors.name" />
        <x-splade-input name="name" placeholder="Input category name" :label="_('Category Name')" />
        <x-splade-submit class="mt-3" :label="_('Add Category')" />
    </x-splade-form>
</x-splade-modal>