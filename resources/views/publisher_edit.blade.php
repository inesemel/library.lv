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
                                <input type="text" name="publisher_title" id="publisher_title" value="{{ old('title', $publisher->title) }}" />
                            </div>

                            <div class="p-3">
                                <label for="publisher_address">{{__("Address")}}</label>
                                <input type="text" name="publisher_address" id="publisher_address" value="{{ old('publisher', $publisher->address) }}" />
                            </div>

                            
                        </fieldset>
                        <div class="px-6 py-4 text-right">
                            <button class="border max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" style="background-color:lavender" type="submit"
                             {{-- {{ (!is_null($author->country) && !empty($author->country)
                                    && !is_null($author->name) && !empty($author->name)
                                    && !is_null($author->birthday) && !empty($author->birthday)
                                    && !is_null($author->pseudonym) && !empty($author->pseudonym))
                                    ? '' : 'disabled' }} --}}>
                                {{__("Save")}}
                            </button>
                        </div> 
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>