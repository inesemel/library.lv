<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of publishers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <h3 class='p-4'>{{__("All publishers")}}</h3>
                    <p class="whitespace-nowrap px-6 py-4 border text-right" style="background-color:rgb(243, 244, 246)">
                        <a href="{{action([App\Http\Controllers\PublisherController::class, 'create'])}}" >
                            {{ __("+ Add new publisher") }}
                        </a>    
                    </p>
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500"
                        <tr>
                            <th scope="col" class="px-6 py-4">{{__("Title")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("Address")}}</th>


                        </tr>
                        </thead>
                        @foreach ($publishers as $publisher)
                        <tr  class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4">{{ $publisher->title }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $publisher->address }}</td>
                            
                            <td class="whitespace-nowrap px-6 py-4 border text-center">
                                <a href="{{action([App\Http\Controllers\PublisherController::class, 'edit'],['id'=> $publisher->id])}}">
                                    {{ __("Edit") }}
                                </a>    
                            </td>
                        </tr>
                    @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>