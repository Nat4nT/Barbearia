<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{Auth::user()}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    {{ Auth::user()}} <br><br>
                    {{ date("H:i")}} <br><br>

                    @can('UserAccess')
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis explicabo cupiditate doloribus, error officia numquam alias repudiandae itaque, unde sit porro expedita mollitia nesciunt voluptate ipsam? Commodi dicta iure sunt.</p>

                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
