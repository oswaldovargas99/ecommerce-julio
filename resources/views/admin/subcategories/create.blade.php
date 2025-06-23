<x-admin-layout>
    <form action="{{ route('admin.subcategories.store') }}" method="POST">
        @csrf
        <div class="card">
            <x-validation-errors class="mb-4"/>
            <div class="mb-4">
                <x-label class="mb-2">Categorías</x-label>
                <x-select name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            @selected(old('category_id') == $category->id)>
                            {{ $category->name }}</option>
                    @endforeach
                </x-select>
            </div>
            <div class="mb-4">
                <x-label class="mb-2">Nombre</x-label>
                <x-input class="w-full" placeholder="Introduce un nombre de la subcategoría" name="name"
                    value="{{ old('name') }}" />
                <div class="mt-2 flex justify-end">
                    <x-button>Guardar</x-button>
                </div>
            </div>
        </div>
    </form>
</x-admin-layout>