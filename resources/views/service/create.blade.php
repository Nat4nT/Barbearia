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
                    <form action="{{route('service.store')}}" method="post">
                        @csrf
                        <input required type="text" name="name" id="" placeholder="Service Name">
                        <input required type="number" name="value" id="" placeholder="Service Value" min="0" step="0.01">
                        <input type="submit" value="Send">
                    </form>
                    @include('layouts.hourCreate')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
