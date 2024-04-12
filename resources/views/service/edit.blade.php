<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('service.edit',['service' => $service->id])}} " method="post">
                        @csrf
                        @method('PUT')
                        <input type="text" name="name" value="{{$service->name}}" required>
                        <input type="number" name="value" value="{{$service->value}}" required step="0.01" min="0">
                        @if ($service->status)
                            <input type="radio" name="status" value="1" checked> Ativo
                            <input type="radio" name="status" value="0" > Inativo
                        @else (!$service->status)
                            <input type="radio" name="status" value="1" >Ativo
                            <input type="radio" name="status" value="0" checked> Inativo
                        @endif
                        <input type="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
