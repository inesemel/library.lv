<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('Amessages.Add_new_publisher') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-300 dark:bg-gray-900">
                    <form method="POST" action={{ action([App\Http\Controllers\PublisherController::class, 'store']) }}>
                        @csrf

                        <fieldset>
                            <legend class="font-semibold">{{__("messages.Add_new_publisher")}}</legend>
                            @if ($errors->any())
                                <div class="alert alert-danger text-red-800">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="p-3">
                                
                                <label for="publisher_title">{{__("messages.Title")}}</label>
                                <br>
                                <x-text-input type="text" name="publisher_title" id="publisher_title" style="width: 100%"/>
                            </div>

                            <div class="p-3">
                                <label for="publisher_address">{{__("messages.Address")}}</label>
                                <br>
                                <x-text-input id="publisher_address" name="publisher_address" type="text" style="width: 100%"/>
                            </div>              

                        </fieldset>
                        
                        <div class="px-6 py-4 text-right">
                            <x-primary-button class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:bg-indigo-400" type="submit">
                                {{__("messages.Save")}}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>