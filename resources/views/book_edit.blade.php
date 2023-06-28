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
                                <label for="book_title">{{__("Title")}}</label>
                                <br>
                                <input type="text" name="book_title" id="book_title" value="{{ old('title', $book->title) }}" style="width: 100%"/>
                            </div>

                            <div class="p-3">
                                <label for="book_pages">{{__("Pages")}}</label>
                                <br>
                                <input id="book_pages" name="book_pages" type="number"  max="2023"
                                    step="1" value="{{ $book->pages }}" />
                            </div>

                            <div class="p-3">
                                <label for="book_year">{{__("Year")}}</label>
                                <br>
                                <input id="book_year" name="book_year" type="number" max=2023 step="1" value="{{ $book->year }}" />
                            </div>

                            <div class="p-3">
                                <label for="book_description">{{__("Description")}}</label>
                                <br>
                                <textarea id="description" name="description" style="width: 100%">{{ $book->description }}</textarea>
                            </div>

                            <div class="p-3">
                                <label for="publisher_id">{{__("Publisher")}}</label>
                                <br>
                                <select name="publisher_id" id="publisher_id">

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
                                        <input type="checkbox" name="authors[]" value="{{ $author->id }}" {{ $book->authors->contains($author) ? 'checked' : '' }}>
                                        {{ $author->name }}
                                    </label>
                                    <br>
                                @endforeach
                            </div>

                        </fieldset>
                        <table class="min-w-full text-left font-light">
                            <td class=" text-left">
                                <form method="POST" action="{{ route('book.destroy', $book->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <script>
                                        function confirmDelete() {
                                            return confirm("Do you really want to delete this book?");
                                        }
                                    </script>
                                    <button class="border max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" style="background-color:rgb(255, 233, 233)" type="submit" onclick="return confirmDelete()">
                                        {{__("Delete")}}
                                    </button>
                                </form>
                            </td>
                            <td class=" text-right">
                                <form method="POST"
                                action={{ action([App\Http\Controllers\BookController::class, 'update'], ['book' => $book])}}> {{-- ['book' => $book]) --}}
                                @csrf
                                @method('POST')
                                   <button class="border max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" style="background-color:rgb(243, 244, 246)" type="submit">
                                        {{__("Save")}}
                                    </button>
                                </form>
                            </td> 
                            <table> 
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
