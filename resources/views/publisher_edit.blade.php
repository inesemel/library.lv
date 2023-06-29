<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('Editing a publisher') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-900">

                <div class="p-6 text-gray-900 dark:text-gray-300">
                    <form method="POST" action={{ action([App\Http\Controllers\PublisherController::class, 'update'], [ 'publisher' => $publisher->id]) }}>
                        @csrf
                        @method('PUT')

                        <fieldset>
                            <legend style="font-size: 150%">{{__("Edit")}}</legend>

                            <div class="p-3">
                                <label for="publisher_title">{{__("Title")}}</label>
                                <br>
                                <x-text-input type="text" name="publisher_title" id="publisher_title" value="{{ old('title', $publisher->title) }}" style="width: 100%"/>
                            </div>

                            <div class="p-3">
                                <label for="publisher_address">{{__("Address")}}</label>
                                <br>
                                <x-text-input type="text" name="publisher_address" id="publisher_address" value="{{ old('publisher', $publisher->address) }}" style="width: 100%"/>
                            </div>

                            
                        </fieldset>
                        <table class="min-w-full text-left font-light my-3">
                            <td class=" text-left">
                                <form method="POST" action="{{ route('publishers.update', $publisher->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <x-primary-button class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:bg-indigo-400" type="submit">
                                        {{__("Save")}}
                                    </x-primary-button>
                                    </form>

                                    <script>
                                        function confirmDelete() {
                                            return confirm("Do you really want to delete this publisher?");
                                        }
                                    </script>
                            </td>

                            <td class=" text-right"> 
                                <form action="{{ route('publishers.destroy', $publisher->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button class=" max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" type="submit" onclick="return confirmDelete()">
                                        {{__("Delete")}}
                                    </x-danger-button>
                                </form>

                            </td>
                        <table>    
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>