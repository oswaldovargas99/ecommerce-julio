<x-admin-layout>
        <div class="card">
        <form action="{{route('admin.families.update', $family)}}" method="POST">

            @csrf

            @method('PUT')

            <div class="mb4">
                <x-label class="mb-2">Nombre</x-label>
                <x-input class="w-full" placeholder="Introduce un nombre de la familia" name="name"
                value="{{old('name', $family->name)}}"/>
                
            </div>
            <div class="mt-2 flex justify-end space-x-2">
                <x-danger-button onclick="confirmDelete()">Eliminar</x-danger-button>
                <x-button>Actualizar</x-button>
            </div>
        </form>
    </div>
    <form action="{{route('admin.families.destroy', $family)}}" 
        method="POST"
        id="delete-form"
        >

        @csrf
        @method('DELETE')
    </form>
    @push('js')
        <script>
            function confirmDelete(){
               document.getElementById('delete-form').submit();
            }
        </script>
    @endpush
</x-admin-layout>