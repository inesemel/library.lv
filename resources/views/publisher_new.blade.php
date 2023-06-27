<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new publisher') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <form method="POST" action={{ action([App\Http\Controllers\PublisherController::class, 'store']) }}>
                        @csrf
                        

                        <fieldset>
                            <legend>{{__("Create")}}</legend>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="p-3">
                                
                                <label for="publisher_title">{{__("Title")}}</label>
                                <input type="text" name="publisher_title" id="publisher_title" />
                            </div>

                            <div class="p-3">
                                <label for="publisher_address">{{__("Address")}}</label>
                                <input id="publisher_address" name="publisher_address" type="text"/>
                            </div>              

                        </fieldset>
                        
                        <div class="px-6 py-4 text-right">
                            <button class="border max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" type="submit">{{__("Save")}}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>