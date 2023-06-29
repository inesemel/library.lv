<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('Editing the book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-900">

                <div class="p-6 text-gray-900 dark:text-gray-300">
                    <form method="POST" action={{ action([App\Http\Controllers\BookController::class, 'update'], [ 'book' => $book->id]) }}>
                        @csrf
                        @method('PUT')

                        <fieldset>
                            <legend style="font-size: 150%">{{__("Edit")}}</legend>
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
                                <label for="book_title">{{__("Title")}}</label>
                                <input type="text" name="book_title" id="book_title" value="{{ old('title', $book->title) }}" />
                            </div>

                            <div class="p-3">
                                <label for="book_pages">{{__("Pages")}}</label>
                                <br>
                                <x-text-input id="book_pages" name="book_pages" type="number"  max="2023"
                                    step="1" value="{{ $book->pages }}" />
                            </div>

                            <div class="p-3">
                                <label for="book_year">{{__("Year")}}</label>
                                <br>
                                <x-text-input id="book_year" name="book_year" type="number" max=2023 step="1" value="{{ $book->year }}" />
                            </div>

                            <div class="p-3">
                                <label for="book_description">{{__("Description")}}</label>
                                <br>
                                <textarea id="description" name="description" style="width: 100%" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    {{ $book->description }}</textarea>
                            </div>

                            <div class="p-3">
                                <label for="publisher_id">{{__("Publisher")}}</label>
                                <br>
                                <select name="publisher_id" id="publisher_id" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">

                                    @foreach ($publishers as $publisher)
                                        <option value="{{ $publisher->id }}"
                                            {{ $publisher->id == $book->publisher_id ? ' selected' : '' }}>{{ $publisher->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="p-4">
                                <label for="author_id">{{__("Author")}}</label>
                                <br>
                                @foreach ($authors->sortBy('name') as $author)
                                    <label>
                                        <input type="checkbox" name="authors[]" value="{{ $author->id }}" {{ $book->authors->contains($author) ? 'checked' : '' }}
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                        {{ $author->name }}
                                    </label>
                                    <br>
                                @endforeach
                            </div>

                            <div class="p-3">
                                <label for="cased">{{__("Cased")}}</label>
                                <input id="cased" name="cased" type="checkbox" value="{{$book->cased}}" @checked($book->cased)
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"/>
                            </div>

                            <div class="p-3">
                                <label for="reprint">{{__("Reprint")}}</label>
                                <input id="reprint" name="reprint" type="checkbox" value="{{$book->reprint}}" @checked($book->reprint)
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"/>
                            </div>  
                             
                        </fieldset>
                        <table class="min-w-full text-left font-light my-3">
                            <td class=" text-left">
                                <form method="POST" action="{{ route('book.update', $book->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <x-primary-button class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:bg-indigo-400" type="submit">
                                        {{__("Save")}}
                                    </x-primary-button>
                                </form>

                            <script>
                                function confirmDelete() {
                                    return confirm("Do you really want to delete this book?");
                                }
                            </script>
                            </td>

                             {{-- <td class=" text-center">
                                <button class="border max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" style="background-color:rgb(243, 244, 246)" type="submit">
                                    <a href="" {{ url()->previous(); }}" {{__("Done")}}</a>
                                </button>
                            </td> --}}

                            <td class=" text-right"> 
                                <form action="{{ route('book.destroy', $book->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button class=" max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" type="submit" onclick="return confirmDelete()">
                                        {{__("Delete")}}
                                    </x-danger-button>
                                </form>
                            </td>
                        </table>      
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>