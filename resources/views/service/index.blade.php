
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{$time}}
    @foreach ($users as $user )

    {{$user->type->type_name}}
    @endforeach

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="popUp" class="hidden">
                <div  class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-2">
                    <div  class="p-6 text-gray-900" >
                        @include('layouts.serviceCreate')
                    </div>
                </div>

            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div>
                        <button onclick="on()" >teste</button>
                        <button onclick="off()" >teste2</button>
                    </div>
                    @if (count($services) != 0)
                        @foreach ($services as $service)
                            <div>
                                {{ $service->name }}
                                |
                                {{ $service->value}}
                                |
                                <a href="{{route('service.show', ['service' => $service->id ])}}">Editar</a>
                            </div>
                        @endforeach
                        @else
                            <div>
                                Não há serviços registrados
                            </div>

                        @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>

</style>
<script>
   async function off(){
        var popUp = document.getElementById('popUp');
        popUp.setAttribute('class','hidden')
        // console.log(popUp);
    }

    async function on(){
        var popUp = document.getElementById('popUp');
        popUp.setAttribute('class', '')
        // console.log(popUp);
    }



</script>
