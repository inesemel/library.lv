<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('messages.List_of_publishers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-900 dark:border-gray-700">
                <div class="p-6 text-gray-900 dark:text-gray-300">

                    <h3 class='p-4 font-semibold'>{{__("messages.All_publishers")}}</h3>
                    @can('is-admin')
                        <a href="{{action([App\Http\Controllers\PublisherController::class, 'create'])}}" class="scale-100 p-6 border-black bg-gray-100 dark:bg-gray-800 rounded-lg shadow shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[0.99] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500">
                            <p>
                                {{ __("messages.Add_new_publisher") }} 
                            </p>
                        </a>    
                    @endcan
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500"
                        <tr>
                            <th scope="col" class="px-6 py-4">{{__("messages.Title")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Address")}}</th>


                        </tr>
                        </thead>
                        @foreach ($publishers as $publisher)
                        <tr  class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4">{{ $publisher->title }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $publisher->address }}</td>
                            @can('is-admin')
                                <td class="whitespace-nowrap px-6 py-4 border-l text-center dark:border-neutral-500">
                                        <a href="{{action([App\Http\Controllers\PublisherController::class, 'edit'],['id'=> $publisher->id])}}">
                                        {{ __("messages.Edit") }}
                                    </a>    
                                </td>
                            @endcan
                        </tr>
                    @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>