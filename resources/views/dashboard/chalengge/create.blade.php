<x-splade-modal close-explicitly>
    {{-- @dd($categories) --}}
    <h1 class="mb-2 mt-0 text-3xl font-medium leading-tight text-primary">Create new chalengge</h1>
    <x-splade-form>
        <p v-text="form.errors.name" />
        <x-splade-input name="name" placeholder="Chalengge Name" :label="_('Chalengge Name')" />
        <x-splade-select name="category_id" :options="$categories" option-label="name" option-value="id" :label="_('Category')" placeholder="Select category" />
        <x-splade-input name="description" placeholder="description" :label="_('Description')" />
        <x-splade-input name="clue" placeholder="clue" :label="_('Clue')" />
        <x-splade-input name="answer" placeholder="answer" :label="_('Answer')" />
        <x-splade-input name="point" placeholder="point" :label="_('Point')" />
        <x-splade-input name="link" placeholder="link" :label="_('Link')" />
        <x-splade-submit class="mt-3" :label="_('Add Chalengge')" />
    </x-splade-form>
</x-splade-modal>