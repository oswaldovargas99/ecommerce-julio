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
                <x-button class="ml-2">Actualizar</x-button>
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
              Swal.fire({
                title: "Estas seguro?",
                text: "No podrás revertir esta acción!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, bórralo!",
                cancelButtonText: "Cancelar"
                }).then((result) => {
                if (result.isConfirmed) {
                   /* Swal.fire({
                    title: "Eliminado!",
                    text: "Tu registro ha sido eliminado.",
                    icon: "success"
                    });*/
                    document.getElementById('delete-form').submit();
                }
                });
            }
        </script>
    @endpush
</x-admin-layout>