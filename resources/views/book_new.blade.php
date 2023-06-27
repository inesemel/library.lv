<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editing the book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <form method="POST" action={{ action([App\Http\Controllers\BookController::class, 'store']) }}>
                        @csrf
                        

                        <fieldset>
                            <legend>{{__("Create")}}</legend>

                            <div class="p-3">
                                
                                <label for="book_title">{{__("Title")}}</label>
                                <input type="text" name="book_title" id="book_title" />
                            </div>

                            <div class="p-3">
                                <label for="author_id">{{__("Author")}}</label>
                                <br>
                                @foreach ($authors as $author)
                                    <label>
                                        <input type="checkbox" name="authors[]" value="{{ $author->id }}" >
                                        {{ $author->name }}
                                    </label>
                                    <br>
                                @endforeach
                            </div>

                            <div class="p-3">
                                <label for="book_pages">{{__("Pages")}}</label>
                                <input id="book_pages" name="book_pages" type="number"/>
                            </div>

                            <div class="p-3">
                                <label for="book_year">{{__("Year")}}</label>
                                <input id="book_year" name="book_year" type="number" max=2023 step="1" />
                            </div>

                            <div class="p-3">
                                <label for="publisher_id">{{__("Publisher")}}</label>
                                <br>
                                <select id="publisher_id" name="publisher_id">
                                
                                @foreach ($publishers as $publisher)
                                    <option value="{{ $publisher->id }}" {{ old('publisher_id') == $publisher->id ? 'selected' : '' }}>{{ $publisher->title }}</option>
                                
                                    <br>
                                @endforeach
                                </select>
                            </div>

                            <div class="p-3">
                                
                                <label for="book_genre">{{__("Genre")}}</label>
                                <input type="text" name="book_genre" id="book_genre" />
                            </div>

                            <div class="p-3">
                                <label for="description">{{__("Description")}}</label>
                                <br>
                                <textarea id="description" name="description"></textarea>
                            </div>

                            <div class="p-3">
                                <label for="cased">{{__("Cased")}}</label>
                                <input id="cased" name="cased" type="checkbox"  />
                            </div>

                            <div class="p-3">
                                <label for="reprint">{{__("Reprint")}}</label>
                                <input id="reprint" name="reprint" type="checkbox"  />
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