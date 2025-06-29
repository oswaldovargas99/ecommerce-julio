<x-admin-layout>
    <div class="card">
        <form action="{{route('admin.families.store')}}" method="POST">

            @csrf
            <x-validation-errors class="mb-4"/>
            <div class="mb4">
                <x-label class="mb-2">Nombre</x-label>
                <x-input class="w-full" placeholder="Introduce un nombre de la familia" name="name"
                value="{{old('name')}}"/>
            </div>
            
            <div class="mt-2 flex justify-end">
                <x-button>Guardar</x-button>
            </div>
        </form>
    </div>

</x-admin-layout>