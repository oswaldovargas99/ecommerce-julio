<x-admin-layout>
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="card">
            <x-validation-errors class="mb-4"/>
            <div class="mb-4">
                <x-label class="mb-2">Familia</x-label>
                <x-select name="family_id">
                    @foreach ($families as $family)
                        <option value="{{ $family->id }}">{{ $family->name }}</option>
                    @endforeach
                </x-select>
            </div>
            <div class="mb-4">
                <x-label class="mb-2">Nombre</x-label>
                <x-input class="w-full" placeholder="Introduce un nombre de la categoría" name="name"
                    value="{{ old('name') }}" />
                <div class="mt-2 flex justify-end">
                    <x-button>Guardar</x-button>
                </div>
            </div>
        </div>
    </form>
</x-admin-layout>
