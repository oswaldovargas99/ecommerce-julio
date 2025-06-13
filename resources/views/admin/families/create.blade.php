<x-admin-layout>
    <div class="card">
        <form action="{{route('admin.families.store')}}" method="POST">

            @csrf

            <div class="mb4">
                <x-label class="mb-2">Nombre</x-label>
                <x-input class="w-full" placeholder="Introduce un nombre de la familia" name="name"
                vale="{{old('name')}}"/>
                
            </div>
            <div class="mt-2 flex justify-end">
                <x-button>Guardar</x-button>
            </div>
        </form>
    </div>

</x-admin-layout>