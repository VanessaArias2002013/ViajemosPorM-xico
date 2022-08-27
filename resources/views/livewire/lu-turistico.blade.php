
<x-slot name="header">
    <h1 class="text-gray-900">VIAJEMOS POR MÉXICO</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        @if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif


        <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3" >Nuevo</button>
       
 @if($modal =  false)
            @include('livewire.crear')
        @endif  

<div>
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Descripción</th>
                <td class="px-4 py-2">Ubicación</td>
                <td class="px-4 py-2">Como llegar</td>
                <td class="px-4 py-2">Recomendaciones</td>
                <td class="px-4 py-2">Horarios de visita</td>
                <td class="px-4 py-2">Restricciones</td>
                <td class="px-4 py-2">Costos</td>
                <td class="px-4 py-2">Insertar fotos</td>
            </tr>
        </thead>
    </table>
    <tbody>
        @foreach ($luturisticos as $luTuristico)
            <tr>
                <td class="border px-4 py-2">{{$luTuristico->id }}</td>
                <td class="borderpx-4 py-2">{{$luTuristico->descripcion }}</td>
                <td class="border px-4 py-2">{{$luTuristico->ubicación }}</td>
                <td class="border px-4 py-2">{{$luTuristico->como_llegar }}</td>
                <td class="border px-4 py-2">{{$luTuristico->recomendaciones }}</td>
                <td class="border px-4 py-2">{{$luTuristico->horarios_de_visitas}}</td>
                <td class="border px-4 py-2">{{$luTuristico->restricciones }}</td>
                <td class="border px-4 py-2">{{$luTuristico->costo }}</td>
                <td class="border px-4 py-2">{{$luTuristico->insertar_fotos }}</td>
             
                <td class="border px-4 py-2 text-center">
                    <button wire:click="editar({{$luTuristico->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                    <button wire:click="borrar({{$luTuristico->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                </td>

            </tr>
            <div wire:ignore.self class="modal fade contactSchool-modal-lg" id="contactSchool" role="dialog"
    aria-labelledby="contactSchoolModaltitle">
    
        @endforeach
    </tbody>
    
</div>
