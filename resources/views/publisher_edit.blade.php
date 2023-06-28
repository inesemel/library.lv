<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editing a publisher') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <form method="POST" action={{ action([App\Http\Controllers\PublisherController::class, 'update'], [ 'publisher' => $publisher->id]) }}>
                        @csrf
                        @method('PUT')

                        <fieldset>
                            <legend style="font-size: 150%">{{__("Edit")}}</legend>

                            <div class="p-3">
                                <label for="publisher_title">{{__("Title")}}</label>
                                <br>
                                <input type="text" name="publisher_title" id="publisher_title" value="{{ old('title', $publisher->title) }}" style="width: 100%"/>
                            </div>

                            <div class="p-3">
                                <label for="publisher_address">{{__("Address")}}</label>
                                <br>
                                <input type="text" name="publisher_address" id="publisher_address" value="{{ old('publisher', $publisher->address) }}" style="width: 100%"/>
                            </div>

                            
                        </fieldset>
                        <table class="min-w-full text-left font-light">
                            <td class=" text-left">
                                <form method="POST" action="{{ route('publishers.destroy', $publisher->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <script>
                                        function confirmDelete() {
                                            return confirm("Do you really want to delete this publisher?");
                                        }
                                    </script>
                                    <button class="border max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" style="background-color:rgb(255, 233, 233)" type="submit" onclick="return confirmDelete()">
                                        {{__("Delete")}}
                                    </button>
                                </form>
                            </td>
                            <td class=" text-right">
                                <button class="border max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" style="background-color:rgb(243, 244, 246)" type="submit">
                                    {{__("Save")}}
                                </button>
                            </td> 
                            <table> 
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
