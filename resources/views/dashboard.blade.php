<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div class="mt-8 text-right">
                <div class="grid grid-cols-8 gap-6">
                    <a href="{{action([App\Http\Controllers\BookController::class, 'index'])}}">{{ __("All books") }}</a>
                    <br><br>
                    <a href="{{action([App\Http\Controllers\AuthorController::class, 'index'])}}">{{ __("All authors") }}</a>
                    <br><br>
                    <a href="{{action([App\Http\Controllers\FavoritesController::class, 'index'])}}">{{ __("Favorites") }}</a>
                    <br><br>
                    <a href="{{action([App\Http\Controllers\PublisherController::class, 'index'])}}">{{ __("All publishers") }}</a>
            </div>
        </div>
    </div>
</x-app-layout>