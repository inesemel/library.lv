<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('messages.Editing_the_book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-300 dark:bg-gray-900">
                    <form method="POST" action={{ action([App\Http\Controllers\BookController::class, 'store']) }}>
                        @csrf
                        

                        <fieldset>
                            <legend class="font-semibold">{{__("messages.Add_new_book")}}</legend>
                            @if ($errors->any())
                                <div class="alert alert-danger text-red-800 dark:text-red-500">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="p-3">
                                
                                <label for="book_title">{{__("messages.Title")}}</label>
                                <br>
                                <x-text-input type="text" name="book_title" id="book_title" style="width: 100%"/>
                            </div>

                            <div class="p-4">
                                <label for="author_id">{{__("messages.Author")}}</label>
                                <br>
                                @foreach ($authors as $author)
                                    <label>
                                        <input type="checkbox" name="authors[]" value="{{ $author->id }}"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                        {{ $author->name }}
                                    </label>
                                    <br>
                                @endforeach
                            </div>

                            <div class="p-3">
                                <label for="book_pages">{{__("messages.Pages")}}</label>
                                <br>
                                <input id="book_pages" name="book_pages" type="number"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"/>
                            </div>

                            <div class="p-3">
                                <label for="book_year">{{__("messages.Year")}}</label>
                                <br>
                                <input id="book_year" name="book_year" type="number" max=2023 step="1"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"/>
                            </div>

                            <div class="p-3">
                                <label for="publisher_id">{{__("messages.Publisher")}}</label>
                                <br>
                                <select id="publisher_id" name="publisher_id"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                
                                @foreach ($publishers as $publisher)
                                    <option value="{{ $publisher->id }}" {{ old('publisher_id') == $publisher->id ? 'selected' : '' }}>{{ $publisher->title }}</option>
                                    <br>
                                @endforeach
                                </select>
                            </div>

                            <div class="p-3">
                                
                                <label for="book_genre">{{__("messages.Genre")}}</label>
                                <br>
                                <x-text-input type="text" name="book_genre" id="book_genre"/>
                            </div>

                            <div class="p-3">
                                <label for="description">{{__("messages.Description")}}</label>
                                <br>
                                <textarea id="description" name="description" style="width: 100%"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
                            </div>

                            <div class="p-3">
                                <label for="cased">{{__("messages.Cased")}}</label>
                                <input id="cased_book" name="cased" type="checkbox"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"/>
                            </div>

                            <div class="p-3">
                                <label for="reprint">{{__("messages.Reprint")}}</label>
                                <input id="reprint_book" name="reprint" type="checkbox"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"/>
                            </div>
                            
                            <div class="p-3">
                                <label for="book_title">{{__("messages.Image")}}</label><br>
                                <x-text-input  type="text" name="book_image" id="book_image" style="width: 100%; border"/>
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