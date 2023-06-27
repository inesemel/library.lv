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
                    <form method="POST" action={{ action([App\Http\Controllers\BookController::class, 'update'], [ 'book' => $book->id]) }}>
                        @csrf
                        @method('PUT')

                        <fieldset>
                            <legend style="font-size: 150%">{{__("Edit")}}</legend>

                            <div class="p-3">
                                
                                <label for="book_title">{{__("Title")}}</label>
                                <input type="text" name="book_title" id="book_title" value="{{ old('title', $book->title) }}" />
                            </div>

                            <div class="p-3">
                                <label for="book_pages">{{__("Pages")}}</label>
                                <input id="book_pages" name="book_pages" type="number" value="{{ $book->pages }}" />
                            </div>

                            <div class="p-3">
                                <label for="book_year">{{__("Year")}}</label>
                                <input id="book_year" name="book_year" type="number" max=2023 step="1" value="{{ $book->year }}" />
                            </div>

                            <div class="p-3">
                                <label for="book_description">{{__("Description")}}</label>
                                <br>
                                <textarea id="description" name="description">{{ $book->description }}</textarea>
                            </div>

                            <div>
                                <label for="publisher_id">{{__("Publisher")}}</label>
                                <select name="publisher_id" id="publisher_id">
                                    
                                    @foreach ($publishers as $publisher)
                                        <option value="{{ $publisher->id }}"
                                            {{ $publisher->id == $book->publisher_id ? ' selected' : '' }}>{{ $publisher->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="p-3">
                                <label for="author_id">{{__("Author")}}</label>
                                <br>
                                @foreach ($authors->sortBy('name') as $author)
                                    <label>
                                        <input type="checkbox" name="authors[]" value="{{ $author->id }}" {{ $book->authors->contains($author) ? 'checked' : '' }}>
                                        {{ $author->name }}
                                    </label>
                                    <br>
                                @endforeach
                            </div>

                        </fieldset>

                        <div class="px-6 py-4 text-right">
                            <button class="border max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" style="background-color:lavender" type="submit">{{__("Save")}}</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
