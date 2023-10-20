<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">Anketimize katılmak istermisiniz?
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full float-right my-auto ">
                    <a href="/anketler">Hemen Katıl</a></button>
                </div>
            </div>
        </div>
    </div>
    @if (session('Mesaj'))
    <div class="bg-green-500 p-4 rounded-lg shadow-md text-white">
        {{ session('Mesaj') }}
    </div>
@endif
</x-app-layout>
